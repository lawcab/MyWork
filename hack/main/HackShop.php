<?php
require 'vendor/autoload.php';
require 'data/HackData.php';
require 'pages/NcixPage.php';
require 'pages/NewEggPage.php';

class HackShop { 

	/**
     * @var \RemoteWebDriver
     */

    public $webDriver;
    public $inputFileName;


	/**
	 * main
	 * @return void
	 */

	public static function main() {

		global $argv, $argc;

		$inputFileName = $argv[1];
		print $inputFileName;

		$capabilities = array(\WebDriverCapabilityType::BROWSER_NAME => 'firefox');
        $webDriver = RemoteWebDriver::create('http://localhost:4444/wd/hub', $capabilities);

        if (($inputFile = fopen($inputFileName,"r")) !== FALSE) {
        	
        	 while (($data = fgetcsv($inputFile,1000,",")) !== FALSE) {
        	 	$hackData = new HackData($data);
                

                $url = $hackData->getUrl();
                $webDriver->get($url); 
                $pageTitle = $webDriver->getTitle();
        
                      
                switch ($hackData->getDomainName()) {
                    case 'NCIX' : 
                        $ncixPage = new NcixPage($webDriver);
                        $hackData->setNewPrice($ncixPage->getPrice());    
                        break;
                    case 'Newegg' :
                        $newEggPage = new NewEggPage($webDriver);
                        $hackData->setNewPrice($newEggPage->getPrice());    
                        break;

                }
               	
                    
                
                

                $hackData->printHackData();

            }
        }


        $webDriver->close();


	}

    

}

HackShop::main();

?>