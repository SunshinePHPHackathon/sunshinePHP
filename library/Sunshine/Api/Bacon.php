<?php

namespace Sunshine\Api;

use Zend\Http\Client;
use Zend\Stdlib\Parameters;
use Zend\Http\Request;

class Bacon
{
    protected $client;
    protected $uri = 'https://baconipsum.com/api/';
    
    public function __construct()
    {
        $this->client = new Client($this->uri);
        $this->client->setOptions(array('sslverifypeer' => false));
    }
    
    public function getContent($sentences = 1)
    {
        //?type=all-meat&paras=1
        $params = new Parameters(array(
            'type' => 'all-meat',
            'sentences' => $sentences
        ));
        
        $request = new Request();
        $request->setUri($this->uri);
        $request->setQuery($params);
           
        $response = $this->client->dispatch($request);
        
        if(!$response->isSuccess()){
            throw new \Exception("Bacon api no workie");
        }
        
        return $response->getBody();
    }
}