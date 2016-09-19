<?php
/**
 * Created by PhpStorm.
 * User: obana
 * Date: 19.09.16
 * Time: 11:50
 */

namespace Page;


class BlogPage
{

    public static $URL = '/blog';

// Section Block
    public static $newsSection = '//a[text()="News"]';

// Follow Us Block
    public static $followUsBlock = '//*[@class="blog-ico"]//h4[text() = "Follow Us"]';

// Instagram Block
    public static $instagramBlock = '//h2[text()="Instagram"]';

// Twitters Block
    public static $twitterBlock = '//h2[text()="Twitters"]';

// Page Navigation Block
    public static $pageNavigationBlock = '//*[@class = "wp-paginate"]';
    public static $pageNavigation« = '//*[@class = "wp-paginate"]//a[text()="«"]';
    public static $pageNavigation1 = '//*[@class = "wp-paginate"]//a[text()="1"]';
    public static $pageNavigation2 = '//*[@class = "wp-paginate"]//a[text()="2"]';
    public static $pageNavigation3 = '//*[@class = "wp-paginate"]//a[text()="3"]';
    public static $pageNavigation5 = '//*[@class = "wp-paginate"]//a[text()="5"]';
    public static $pageNavigation» = '//*[@class = "wp-paginate"]//a[text()="»"]';




    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

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
        $I->click(self::$pageNavigation5);
        $I->scrollTo(self::$pageNavigationBlock);
        $I->waitForElementNotVisible(self::$pageNavigation5);
    }

    public function checkBlocks(){
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->waitForElement(self::$newsSection);
        $I->click(self::$newsSection);
        $I->seeInCurrentUrl('/?tag=news');
        $I->waitForElement(self::$newsSection);
        $I->waitForElement(self::$followUsBlock);
        $I->waitForElement(self::$instagramBlock);
        $I->waitForElement(self::$twitterBlock);

    }

}