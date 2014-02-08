<?php

namespace Sunshine\Api;

require __DIR__ . '/Pintlabs/Service/Brewerydb.php';

class Beer
{
	protected $_bdb;

	public function __construct()
	{
		$config = new \Zend\Config\Config(require __DIR__ . '/../../../config/config.php');
		$this->_bdb = new Pintlabs_Service_Brewerydb($config['beerKey']);
		$this->_bdb->setFormat('php'); // if you want to get php back. 'xml' and 'json' are also valid options.
	}

	public function getBreweries($city, $state)
	{
		if (strlen($state) === 2) {
			$state = $this->_translateState(strtoupper($state));
		}

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

	protected function _translateState($lookupState)
	{
		$us_state_abbrevs_names = array(
			'AL'=>'ALABAMA',
			'AK'=>'ALASKA',
			'AS'=>'AMERICAN SAMOA',
			'AZ'=>'ARIZONA',
			'AR'=>'ARKANSAS',
			'CA'=>'CALIFORNIA',
			'CO'=>'COLORADO',
			'CT'=>'CONNECTICUT',
			'DE'=>'DELAWARE',
			'DC'=>'DISTRICT OF COLUMBIA',
			'FM'=>'FEDERATED STATES OF MICRONESIA',
			'FL'=>'FLORIDA',
			'GA'=>'GEORGIA',
			'GU'=>'GUAM GU',
			'HI'=>'HAWAII',
			'ID'=>'IDAHO',
			'IL'=>'ILLINOIS',
			'IN'=>'INDIANA',
			'IA'=>'IOWA',
			'KS'=>'KANSAS',
			'KY'=>'KENTUCKY',
			'LA'=>'LOUISIANA',
			'ME'=>'MAINE',
			'MH'=>'MARSHALL ISLANDS',
			'MD'=>'MARYLAND',
			'MA'=>'MASSACHUSETTS',
			'MI'=>'MICHIGAN',
			'MN'=>'MINNESOTA',
			'MS'=>'MISSISSIPPI',
			'MO'=>'MISSOURI',
			'MT'=>'MONTANA',
			'NE'=>'NEBRASKA',
			'NV'=>'NEVADA',
			'NH'=>'NEW HAMPSHIRE',
			'NJ'=>'NEW JERSEY',
			'NM'=>'NEW MEXICO',
			'NY'=>'NEW YORK',
			'NC'=>'NORTH CAROLINA',
			'ND'=>'NORTH DAKOTA',
			'MP'=>'NORTHERN MARIANA ISLANDS',
			'OH'=>'OHIO',
			'OK'=>'OKLAHOMA',
			'OR'=>'OREGON',
			'PW'=>'PALAU',
			'PA'=>'PENNSYLVANIA',
			'PR'=>'PUERTO RICO',
			'RI'=>'RHODE ISLAND',
			'SC'=>'SOUTH CAROLINA',
			'SD'=>'SOUTH DAKOTA',
			'TN'=>'TENNESSEE',
			'TX'=>'TEXAS',
			'UT'=>'UTAH',
			'VT'=>'VERMONT',
			'VI'=>'VIRGIN ISLANDS',
			'VA'=>'VIRGINIA',
			'WA'=>'WASHINGTON',
			'WV'=>'WEST VIRGINIA',
			'WI'=>'WISCONSIN',
			'WY'=>'WYOMING',
			'AE'=>'ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST',
			'AA'=>'ARMED FORCES AMERICA (EXCEPT CANADA)',
			'AP'=>'ARMED FORCES PACIFIC'
		);

		if (in_array($lookupState, array_keys($us_state_abbrevs_names))) {
			return $us_state_abbrevs_names[$lookupState];
		} else {
			return $lookupState;
		}
	}
}