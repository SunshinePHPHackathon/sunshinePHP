<?php

namespace Sunshine\Api;

class Bacon
{
    protected $client;
    protected $uri = 'https://baconipsum.com/api/?type=all-meat&paras=1';
    
    public function __construct()
    {
        $this->client = new \Zend\Http\Client($this->uri);
        $this->client->setOptions(array('sslverifypeer' => false));
    }
    
    public function getContent($paragraphs = 1)
    {
        //?type=all-meat&paras=1
        $params = new \Zend\Stdlib\Parameters(array(
            'type' => 'all-meat',
            'paras' => $paragraphs
        ));
        
        $request = new \Zend\Http\Request();
        $request->setUri($this->uri);
        $request->setQuery($params);
           
        $response = $this->client->dispatch($request);
        
        if(!$response->isSuccess()){
            throw new \Exception("Bacon api no workie");
        }
        
        return $response->getBody();
    }
}