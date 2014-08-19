<?php
require_once("BasePage.php");


/**
 * NcixPage
 */

class NewEggPage extends BasePage {

	/**
	 * PRICE_XPATH
	 */

	//public $PRICE_XPATH = "id('div_price')/x:table/x:tbody/x:tr[1]/x:td[2]/x:font[1]/x:b";
	public $PRICE_ID = "singleFinalPrice";

	public function __construct($webDriver) {
		parent::__construct($webDriver);
	}

	public function getPrice() {
		$price = $this->getText(WebDriverBy::id($this->PRICE_ID));
		return $price;
	}
}

?>