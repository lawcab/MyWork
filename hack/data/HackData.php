<?php

/**
 * HackData
 */

class HackData {


	/**
	 * domainName
	 * @var string
	 */

	private $domainName;

	/**
	 * getDomainName
	 * @return string
	 */

	public function getDomainName() {

		$this->domainName = split("-", $this->stepDescription)[0];

		return $this->domainName;

	}
	/**
	 * newPrice
	 * @var string
	 */

	private $newPrice;

	/**
	 * setNewPrice
	 * @param $value
	 * @return void
	 */

	public function setNewPrice($value) {

		$this->newPrice = $value;

	}

	/**
	 * getNewPrice
	 * @return string
	 */

	public function getNewPrice() {

		return $this->newPrice;

	}

	/**
	 * url
	 * @var string
	 */

	private $url;

	/**
	 * setUrl
	 * @param $value
	 * @return void
	 */

	public function setUrl($value) {

		$this->url = $value;

	}

	/**
	 * getUrl
	 * @return string
	 */

	public function getUrl() {

		return $this->url;

	}

	/**
	 * oldPrice
	 * @var string
	 */

	private $oldPrice;

	/**
	 * setOldPrice
	 * @param $value
	 * @return void
	 */

	public function setOldPrice($value) {

		$this->oldPrice = $value;

	}

	/**
	 * getOldPrice
	 * @return string
	 */

	public function getOldPrice() {

		return $this->oldPrice;

	}

	/**
	 * stepDescription
	 * @var String
	 */

	private $stepDescription;

	/**
	 * setStepDescription
	 * @param String $value
	 * @return void
	 */

	public function setStepDescription(String $value) {

		$this->stepDescription = $value;

	}

	/**
	 * getStepDescription
	 * @return String
	 */

	public function getStepDescription() {

		return $this->stepDescription;

	}

	public function __construct($data) {
		$this->url = $data[0];
		$this->oldPrice = $data[1];
		$this->stepDescription = $data[2];
	}

	public function printHackData() {
        print "Description : ".$this->getStepDescription();
        print "\t";
        print "Old Price : ".$this->getOldPrice();
        print "\t";
        print "New Price : ".$this->getNewPrice();
        print "\n";
    }
}
?>