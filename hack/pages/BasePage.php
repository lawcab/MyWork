<?php

class BasePage
{
    /**
     * @var \RemoteWebDriver
     */
    protected $webDriver;

    public function __construct($webDriver) {
        $this->webDriver = $webDriver;
    }

    protected function typeText($locator, $textValue) {
        $this->webDriver->findElement($locator)->sendKeys($textValue);
    }

    protected function getText($locator) {
        return $this->webDriver->findElement($locator)->getText();
    }

    protected function selectByValue($locator, $value) {
        $webDriverSelect = new WebDriverSelect($this->webDriver->findElement($locator));
        $webDriverSelect->selectByValue($value);
    }

    protected function selectByVisibleText($locator, $value) {
        $webDriverSelect = new WebDriverSelect($this->webDriver->findElement($locator));
        $webDriverSelect->selectByVisibleText($value);
    }

    protected function click($locator) {
        $this->webDriver->findElement($locator)->click();
    }

    protected function doesElementExist($locator) {
        if (count($this->webDriver->findElements($locator)) > 0) {
            return true;
        } else {
            return false;
        }
    }

    protected function doesElementExistRelative($element, $locator) {
        if (count($element->findElements($locator)) > 0) {
            return true;
        } else {
            return false;
        }
    }

}
?>