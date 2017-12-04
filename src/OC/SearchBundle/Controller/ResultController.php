<?php

namespace OC\SearchBundle\Controller;

use OC\SearchBundle\Entity\Result;
use OC\SearchBundle\Gitrepo;
use Pagerfanta\Pagerfanta;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Request\ParamFetcherInterface;
use Nelmio\ApiDocBundle\Annotation as Doc;
use Pagerfanta\Adapter\ArrayAdapter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ResultController extends Controller
{
    /**
     * @Doc\ApiDoc(
     *     resource=true,
     *     description="Get the list of all results."
     * )
     * @Rest\Get("/results", name="result_list")
     * @Rest\QueryParam(
     *     name="search",
     *     default="",
     *     description="Keyword searched."
     * )
     * @Rest\QueryParam(
     *     name="limit",
     *     requirements="\d+",
     *     default="25",
     *     description="Max number of results per page."
     * )
     * @Rest\QueryParam(
     *     name="page",
     *     requirements="\d+",
     *     default="1",
     *     description="The current pagination."
     * )Ò
     * @Rest\QueryParam(
     *     name="sort",
     *     requirements="stars|forks|updated",
     *     default="stars",
     *     description="The sort field (stars, forks or updated)."
     * )
     * @Rest\View()
     */
    public function listAction(ParamFetcherInterface $paramFetcher)
    {
        // Get the Query parameters
        $search = $paramFetcher->get('search');
        $limit = $paramFetcher->get('limit');
        $page = $paramFetcher->get('page');
        $sort = $paramFetcher->get('sort');

        // Call the HTTP client
        $gitrepo = $mailer = $this->container->get('app.gitrepo');
        // Call the external API
        $results = $gitrepo->getSearch($search, $sort);

        // Get the results from the external API
        // Stock them in an array
        $final_results = array();
        foreach ($results['items'] as $result) {
            $result_object = new Result();
            $result_object->setOwner($result['repository']['owner']['login']);
            $result_object->setRepository($result['repository']['name']);
            $result_object->setFileName($result['repository']['full_name']);
            $final_results[] = $result_object;
        }

        // Use PagerFanta to build a paginated result
        $adapter = new ArrayAdapter($final_results);
        $pager = new Pagerfanta($adapter);

        // Set the current page from the query parameter
        $pager->setCurrentPage($page);
        // Set the number of hits per page
        $pager->setMaxPerPage((int) $limit);
        // Get the total number of hits
        $current_results['data'] = $pager->getCurrentPageResults();

        // Retrieve data usefull to paginate
        // The limit of hits per page, the total of hits, the hits displayed on the current page, the current page
        $current_results['meta']['limit'] = $pager->getMaxPerPage();
        $current_results['meta']['current_items'] = count($pager->getCurrentPageResults());
        $current_results['meta']['total_items'] = $pager->getNbResults();
        $current_results['meta']['current_page'] = $pager->getCurrentPage();

        // Serialize the result (JSON)
        $data = $this->get('jms_serializer')->serialize($current_results, 'json');

        // Return the response
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}