<?php
/**
 * Created by PhpStorm.
 * User: obana
 * Date: 14.09.16
 * Time: 11:59
 */

namespace Page;


class AboutUsPage
{


    public static $URL = '/about-it-svit';
    public static $homeLink = '//a[text()="Home"]';

// Contacts Block
    public static $contacts = '//*[@class = "contact-wrapper"]';

// Instagram Block
    public static $followUsInstagramLink = '//*[@class="widget-area"]//a[text()="Follow Us!"]';
    public static $instagramITsvit = '//*[@title="itsvit"]';

    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }


    public function aboutUsInstagramBlock (){
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->waitForElementVisible(self::$contacts);
        $I->scrollTo(self::$followUsInstagramLink);
        $I->click(self::$followUsInstagramLink);
        $I->executeInSelenium(function (\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) {
            $handles = $webdriver->getWindowHandles();
            $last_window = end($handles);
            $webdriver->switchTo()->window($last_window);
        });
        $I->seeInCurrentUrl('/itsvit/');
        $I->waitForElementVisible(self::$instagramITsvit);
    }

}