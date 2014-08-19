<?php
require_once("BasePage.php");


/**
 * NcixPage
 */

class NcixPage extends BasePage {

	/**
	 * PRICE_XPATH
	 */

	//public $PRICE_XPATH = "id('div_price')/x:table/x:tbody/x:tr[1]/x:td[2]/x:font[1]/x:b";
	public $PRICE_XPATH = "//div[@id='div_price']//tr[1]//td[2]";

	public function __construct($webDriver) {
		parent::__construct($webDriver);
	}

	public function getPrice() {
		$price = $this->getText(WebDriverBy::xpath($this->PRICE_XPATH));
		return $price;
	}
}

?>