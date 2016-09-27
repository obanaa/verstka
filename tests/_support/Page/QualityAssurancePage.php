<?php
/**
 * Created by PhpStorm.
 * User: obana
 * Date: 20.09.16
 * Time: 17:51
 */

namespace Page;


class QualityAssurancePage
{

    public static $URL = '/itsvit_our_services/quality-assurance/';

//Features
    public static $webTesting = '//*[@class ="item-head"]//h5[text()="Web Application Testing"]';
    public static $popUpWebTesting = '//*[@class ="popup-full-name"]//h5[text()="Web Application Testing"]';
    public static $desktopTesting = '//*[@class ="item-head"]//h5[text()="Desktop Application Testing"]';
    public static $popUpDesktopTesting = '//*[@class ="popup-full-name"]//h5[text()="Desktop Application Testing"]';
    public static $mobileTesting = '//*[@class ="item-head"]//h5[text()="Mobile Application Testing"]';
    public static $popUpMobileTesting = '//*[@class ="popup-full-name"]//h5[text()="Mobile Application Testing"]';


    public static $fullText = '//*[@class = "full-text"]//p';
    public static $closeButton = '//*[@title="Close (Esc)"]';

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function qualityAssurancePageFeatures (){
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->scrollTo(self::$webTesting);
        $I->click(self::$webTesting);
        $I->waitForElementVisible(self::$popUpWebTesting);
        $I->waitForElementVisible(self::$fullText);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$desktopTesting);
        $I->click(self::$desktopTesting);
        $I->waitForElementVisible(self::$popUpDesktopTesting);
        $I->waitForElementVisible(self::$fullText);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$mobileTesting);
        $I->click(self::$mobileTesting);
        $I->waitForElementVisible(self::$popUpMobileTesting);
        $I->waitForElementVisible(self::$fullText);
        $I->click(self::$closeButton);
    }

}