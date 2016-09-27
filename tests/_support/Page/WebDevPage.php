<?php
/**
 * Created by PhpStorm.
 * User: obana
 * Date: 19.09.16
 * Time: 10:11
 */

namespace Page;


class WebDevPage
{

    public static $URL = '/itsvit_our_services/web-development/';

//Features
    public static $magentoEcommerce = '//*[@class ="item-head"]//h5[text()="Magento E-Commerce"]';
    public static $popUpmagentoEcommerce = '//*[@class ="popup-full-name"]//h5[text()="Magento E-Commerce"]';
    public static $OpenCartECommerce = '//*[@class ="item-head"]//h5[text()="OpenCart  E-Commerce"]';
    public static $popUpOpenCartECommerce = '//*[@class ="popup-full-name"]//h5[text()="OpenCart  E-Commerce"]';
    public static $WordPressECommerce = '//*[@class ="item-head"]//h5[text()="WordPress E-Commerce"]';
    public static $popUpWordPressECommerce = '//*[@class ="popup-full-name"]//h5[text()="WordPress E-Commerce"]';
    public static $PlugMagentoWordPressJoomla = '//*[@class ="item-head"]//h5[text()="Plugins for Magento, WordPress, Joomla"]';
    public static $popUpPlugMagentoWordPressJoomla = '//*[@class ="popup-full-name"]//h5[text()="Plugins for Magento, WordPress, Joomla"]';
    public static $CustomWebSolutions = '//*[@class ="item-head"]//h5[text()="Custom Web Solutions"]';
    public static $popUpCustomWebSolutions= '//*[@class ="popup-full-name"]//h5[text()="Custom Web Solutions"]';

    public static $fullText = '//*[@class = "full-text"]//p';
    public static $closeButton = '//*[@title="Close (Esc)"]';

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }


    public function webDevFeatures (){
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->scrollTo(self::$CustomWebSolutions);
        $I->click(self::$magentoEcommerce);
        $I->waitForElementVisible(self::$popUpmagentoEcommerce);
        $I->waitForElementVisible(self::$fullText);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$OpenCartECommerce);
        $I->click(self::$OpenCartECommerce);
        $I->waitForElementVisible(self::$popUpOpenCartECommerce);
        $I->waitForElementVisible(self::$fullText);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$WordPressECommerce);
        $I->click(self::$WordPressECommerce);
        $I->waitForElementVisible(self::$popUpWordPressECommerce);
        $I->waitForElementVisible(self::$fullText);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$PlugMagentoWordPressJoomla);
        $I->click(self::$PlugMagentoWordPressJoomla);
        $I->waitForElementVisible(self::$popUpPlugMagentoWordPressJoomla);
        $I->waitForElementVisible(self::$fullText);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$CustomWebSolutions);
        $I->click(self::$CustomWebSolutions);
        $I->waitForElementVisible(self::$popUpCustomWebSolutions);
        $I->waitForElementVisible(self::$fullText);
        $I->click(self::$closeButton);
        }

}