<?php
/**
 * Created by PhpStorm.
 * User: obana
 * Date: 20.09.16
 * Time: 15:54
 */

namespace Page;


class BigDataPage
{

    public static $URL = '/itsvit_our_services/big-data-and-data-science/';

//Features
    public static $webCrawlers = '//*[@class ="item-head"]//h5[text()="Web Crawlers"]';
    public static $popWebCrawlers = '//*[@class ="popup-full-name"]//h5[text()="Web Crawlers"]';
    public static $dataProcessors = '//*[@class ="item-head"]//h5[text()="Data Processors"]';
    public static $popUpDataProcessors = '//*[@class ="popup-full-name"]//h5[text()="Data Processors"]';
    public static $classifiers = '//*[@class ="item-head"]//h5[text()="Classifiers"]';
    public static $popUpClassifiers = '//*[@class ="popup-full-name"]//h5[text()="Classifiers"]';
    public static $infrastructureBigData = '//*[@class ="item-head"]//h5[text()="Infrastructure for Big Data"]';
    public static $popUpInfrastructureBigData = '//*[@class ="popup-full-name"]//h5[text()="Infrastructure for Big Data"]';


    public static $fullText = '//*[@class = "full-text"]//p';
    public static $closeButton = '//*[@title="Close (Esc)"]';

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function bigDataFeatures (){
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->scrollTo(self::$webCrawlers);
        $I->click(self::$webCrawlers);
        $I->waitForElementVisible(self::$popWebCrawlers);
        $I->waitForElementVisible(self::$fullText);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$dataProcessors);
        $I->click(self::$dataProcessors);
        $I->waitForElementVisible(self::$popUpDataProcessors);
        $I->waitForElementVisible(self::$fullText);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$classifiers);
        $I->click(self::$classifiers);
        $I->waitForElementVisible(self::$popUpClassifiers);
        $I->waitForElementVisible(self::$fullText);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$infrastructureBigData);
        $I->click(self::$infrastructureBigData);
        $I->waitForElementVisible(self::$popUpInfrastructureBigData);
        $I->waitForElementVisible(self::$fullText);
        $I->click(self::$closeButton);
    }

}