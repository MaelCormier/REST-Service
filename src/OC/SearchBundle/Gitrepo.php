<?php
/**
 * Created by PhpStorm.
 * User: Miles
 * Date: 27/11/2017
 * Time: 22:10
 */

namespace OC\SearchBundle;

use GuzzleHttp\Client;
use JMS\Serializer\Serializer;

class Gitrepo
{
    private $gitrepoClient;
    private $serializer;
    // For security reasons, not displaying my own key :-)
    private $token = 'XXXX';

    public function __construct(Client $gitrepoClient, Serializer $serializer)
    {
        $this->gitrepoClient = $gitrepoClient;
        $this->serializer = $serializer;
    }

    public function getSearch($search, $sort)
    {
        $uri = '/search/code?q='.$search.'&sort='.$sort.'&access_token='.$this->token;
        try {
            $response = $this->gitrepoClient->get($uri);
        } catch (\Exception $e) {
            return ['error' => 'Data not available.'.$e];
        }

        $data = $this->serializer->deserialize($response->getBody()->getContents(), 'array', 'json');

        return $data;
    }

}
