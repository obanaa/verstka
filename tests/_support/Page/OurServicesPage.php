<?php
/**
 * Created by PhpStorm.
 * User: obana
 * Date: 14.09.16
 * Time: 11:23
 */

namespace Page;


class OurServicesPage
{


// Page Navigation Block
    public static $pageNavigationBlock = '//*[@class = "wp-paginate"]';
    public static $pageNavigation« = '//*[@class = "wp-paginate"]//a[text()="«"]';
    public static $pageNavigation1 = '//*[@class = "wp-paginate"]//a[text()="1"]';
    public static $pageNavigation2 = '//*[@class = "wp-paginate"]//a[text()="2"]';
    public static $pageNavigation3 = '//*[@class = "wp-paginate"]//a[text()="3"]';
    public static $pageNavigation4 = '//*[@class = "wp-paginate"]//a[text()="4"]';
    public static $pageNavigation» = '//*[@class = "wp-paginate"]//a[text()="»"]';

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public static $URL = '/itsvit_our_services';


    public function pageNavigation(){
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->scrollTo(self::$pageNavigationBlock);
        $I->waitForElementNotVisible(self::$pageNavigation1);
        $I->click(self::$pageNavigation»);
        $I->scrollTo(self::$pageNavigationBlock);
        $I->waitForElementNotVisible(self::$pageNavigation2);
        $I->click(self::$pageNavigation«);
        $I->scrollTo(self::$pageNavigationBlock);
        $I->waitForElementNotVisible(self::$pageNavigation1);
        $I->click(self::$pageNavigation3);
        $I->scrollTo(self::$pageNavigationBlock);
        $I->waitForElementNotVisible(self::$pageNavigation3);
        $I->click(self::$pageNavigation4);
        $I->scrollTo(self::$pageNavigationBlock);
        $I->waitForElementNotVisible(self::$pageNavigation4);
    }



}