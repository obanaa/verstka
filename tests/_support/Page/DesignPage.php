<?php
/**
 * Created by PhpStorm.
 * User: obana
 * Date: 27.09.16
 * Time: 15:12
 */

namespace Page;


class DesignPage
{

    public static $URL = '/itsvit_our_services/design/';

//Features
    public static $websiteDesign = '//*[@class ="item-head"]//h5[text()="Website Design"]';
    public static $popUpwebsiteDesign = '//*[@class ="popup-full-name"]//h5[text()="Website Design"]';
    public static $LogosAndBrandingStyle = '//*[@class ="item-head"]//h5[text()="Logos and Branding Style"]';
    public static $popUpLogosAndBrandingStyle = '//*[@class ="popup-full-name"]//h5[text()="Logos and Branding Style"]';
    public static $DesignUXUI = '//*[@class ="item-head"]//h5[text()="Design UX, UI"]';
    public static $popUpDesignUXUI = '//*[@class ="popup-full-name"]//h5[text()="Design UX, UI"]';
    public static $designMobileApplications = '//*[@class ="item-head"]//h5[text()="Design Mobile Applications"]';
    public static $popUpDesignMobileApplications = '//*[@class ="popup-full-name"]//h5[text()="Design Mobile Applications"]';
    public static $wireframingPrototyping = '//*[@class ="item-head"]//h5[text()="Wireframing, Prototyping"]';
    public static $popUpWireframingPrototyping= '//*[@class ="popup-full-name"]//h5[text()="Wireframing, Prototyping"]';
    public static $polygraphy = '//*[@class ="item-head"]//h5[text()="Polygraphy"]';
    public static $popUpPolygraphy = '//*[@class ="popup-full-name"]//h5[text()="Polygraphy"]';


    public static $fullText = '//*[@class = "full-text"]//p';
    public static $closeButton = '//*[@title="Close (Esc)"]';

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function designFeatures (){
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->scrollTo(self::$websiteDesign);
        $I->click(self::$websiteDesign);
        $I->waitForElementVisible(self::$popUpwebsiteDesign);
        $I->waitForElementVisible(self::$fullText);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$LogosAndBrandingStyle);
        $I->click(self::$LogosAndBrandingStyle);
        $I->waitForElementVisible(self::$popUpLogosAndBrandingStyle);
        $I->waitForElementVisible(self::$fullText);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$DesignUXUI);
        $I->click(self::$DesignUXUI);
        $I->waitForElementVisible(self::$popUpDesignUXUI);
        $I->waitForElementVisible(self::$fullText);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$designMobileApplications);
        $I->click(self::$designMobileApplications);
        $I->waitForElementVisible(self::$popUpDesignMobileApplications);
        $I->waitForElementVisible(self::$fullText);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$wireframingPrototyping);
        $I->click(self::$wireframingPrototyping);
        $I->waitForElementVisible(self::$popUpWireframingPrototyping);
        $I->waitForElementVisible(self::$fullText);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$polygraphy);
        $I->click(self::$polygraphy);
        $I->waitForElementVisible(self::$popUpPolygraphy);
        $I->waitForElementVisible(self::$fullText);
        $I->click(self::$closeButton);
    }

}