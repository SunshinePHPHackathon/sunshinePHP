<?php

namespace Sunshine\Api;

class FourSquare
{
    protected $client;
    protected $uri = 'https://api.foursquare.com/v2/venues/search';
    protected $location;
    protected $clientId;

    public function __construct($apiKey)
    {
        $this->client = new \Zend\Http\Client($this->uri);
        $this->client->setOptions(array('sslverifypeer' => false));

        $this->clientId = $apiKey;
    }

    public function getVenues($apiToken, $city = "Miami", $state = "FL", $type = "Zombies")
    {
        $params = new \Zend\Stdlib\Parameters(array(
             'near' => $city . ", " . $state,
             'client_id' => $this->clientId,
             'client_secret' => $apiToken,
             'v' => '20140207',
             'query' => $type
        ));

        $request = new \Zend\Http\Request();
        $request->setUri($this->uri);
        $request->setQuery($params);

        $response = $this->client->dispatch($request);

        if(!$response->isSuccess()){
            throw new \Exception("FourSquare api no workie");
        }

        return $response->getBody();
    }
}