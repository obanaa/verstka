<?php
/**
 * Created by PhpStorm.
 * User: obana
 * Date: 24.11.16
 * Time: 10:56
 */

#require_once('file.php');


namespace Page;


class Links
{


    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public static $URL = '/';
    public static $URL1 = '/blog';
    public static $URL2 = '/about-it-svit';
    public static $URL3 = '/our-services/devops/';
    public static $URL4 = '/our-services/web-development/';
    public static $URL5 = '/our-services/design/';
    public static $URL6 = '/our-services/big-data-and-data-science/';
    public static $URL7 = '/our-services/quality-assurance-and-automation/';

    public function pageAndScreen (){
        $I = $this->tester;
        $I->amOnPage(self::$URL1);
        $I->scrollDown(1100);
        $I->amOnPage(self::$URL2);
        $I->scrollDown(1100);
        $I->amOnPage(self::$URL3);
        $I->scrollDown(1100);
        $I->amOnPage(self::$URL4);
        $I->scrollDown(1100);
        $I->amOnPage(self::$URL5);
        $I->scrollDown(1100);
        $I->amOnPage(self::$URL6);
        $I->scrollDown(1100);
        $I->amOnPage(self::$URL7);
        $I->scrollDown(1100);
        $I->waitAndScreen(7);
        }




}