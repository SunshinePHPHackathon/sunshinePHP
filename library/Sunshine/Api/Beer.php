<?php

namespace Sunshine\Api;

require __DIR__ . '/Pintlabs/Service/Brewerydb.php';

class Beer
{
	protected $_bdb;

	public function __construct()
	{
		$config = new \Zend\Config\Config(require __DIR__ . '/../../../config/config-sample.php');
		$this->_bdb = new Pintlabs_Service_Brewerydb($config['beerKey']);
		$this->_bdb->setFormat('php'); // if you want to get php back. 'xml' and 'json' are also valid options.
	}

	public function getBreweries($city, $state)
	{
		try {
		    // The first argument to request() is the endpoint you want to call
		    // 'brewery/BrvKTz', 'beers', etc.
		    // The third parameter is the HTTP method to use (GET, PUT, POST, or DELETE)
		    $results = $this->_bdb->request('locations', array('locality' => $city ,'region' => $state), 'GET'); // where $params is a keyed array of parameters to send with the API call.
		} catch (Exception $e) {
		    $results = array('error' => $e->getMessage());
		}

		return $results;
	}
}