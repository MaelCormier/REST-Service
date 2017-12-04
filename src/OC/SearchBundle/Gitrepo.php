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
    private $token = '1b642b49bf27bfbdaec4a23b06071630154d0410';

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