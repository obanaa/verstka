<?php
/**
 * Created by PhpStorm.
 * User: obana
 * Date: 12.09.16
 * Time: 10:19
 */

namespace Page;


class MainPage
{

    public static $URL = '/';
    public static $logo = '//*[@class = "top-logo"]';
// Header
    public static $aboutUsHeader = '//nav[1]//a[text()="About us"]';
    public static $partnersHeader = '//nav[1]//a[text()="Partners"]';
    public static $contactsHeader = '//nav[1]//a[text()="Contacts"]';
    public static $ourServicesHeader = '//nav[1]//a[text()="Our Services"]';
    public static $blogHeader = '//nav[1]//a[text()="Blog"]';

// Our Services Drop-down list
    public static $devOpsHeader = '//nav[1]//a[text()="DevOps"]';
    public static $webDevHeader = '//nav[1]//a[text()="Web Development"]';
    public static $designHeader = '//nav[1]//a[text()="Design"]';
    public static $bigDataHeader = '//nav[1]//a[text()="Big Data & Data Science"]';
    public static $qualityAssuranceAutomation = '//nav[1]//a[text()="Quality Assurance & Automation"]';
    public static $documentationHeader = '//nav[1]//a[text()="Documentation"]';

    public static $h3 = '//*[@class="col-md-12"]//h3';
    public static $h3MainPage = '//*[@class ="about-us-descr"]/h3';
    public static $h3def = '//h3';
    public static $blogItems = '//*[@class = "blog-item"]';

// Footer
    public static $privatePolicyFooter ='//*[@id="menu-button_menu"]//a[text()="Privacy Policy"]';
    public static $termsOfUseFooter ='//*[@id="menu-button_menu"]//a[text()="Terms of Use"]';
    public static $partnersFooter ='//*[@id="menu-button_menu"]//a[text()="Partners"]';
    public static $logoFooter = '//*[@class = "logo-wrap"]/a';

// Footer social
    public static $facebookFooter = '//*[@class="footer-ico"]//li[1]/a';
    public static $facebookITsvit = '//a[text()="ІТ Svit"]';
    public static $twitterFooter = '//*[@class="footer-ico"]//li[2]/a';
    public static $twitterITsvit = '//h1/a[text()="IT Svit"]';
    public static $instagramFooter = '//*[@class="footer-ico"]//li[3]/a';
    public static $instagramITsvit = '//*[@title="itsvit"]';
    public static $linkedinFooter = '//*[@class="footer-ico"]//li[4]/a';
    public static $linkedinITsvit = '//h1/span[text()="IT Svit"]';
    public static $googlePlusFooter = '//*[@class="footer-ico"]//li[5]/a';
    public static $googlePlusITsvit = '//a[text()="itsvit.org"]';

//  What's new Block

    public static $prevButton = '//*[@class="prev"]';
    public static $nextButton = '//*[@class="next"]';
    public static $readMoreLink = './/*[@id="update-slider"]/div[1]/div/div[7]//a';

    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }


    public function headerLinks()
    {
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->click(self::$aboutUsHeader);
        $I->waitForElement(self::$h3);
        $I->see('About IT Svit',self::$h3);
        $I->click(self::$partnersHeader);
        $I->waitForElement(self::$h3);
        $I->see('Partners',self::$h3);
        $I->click(self::$blogHeader);
        $I->waitForElement(self::$blogItems);
        $I->waitAndClick(self::$contactsHeader);
        $I->waitForElement(self::$h3);
        $I->see('Contacts',self::$h3);
        $I->moveMouseOver(self::$ourServicesHeader);
        $I->waitAndClick(self::$devOpsHeader);
        $I->waitForElement(self::$h3);
        $I->see('DevOps',self::$h3);
        $I->moveMouseOver(self::$ourServicesHeader);
        $I->waitAndClick(self::$webDevHeader);
        $I->waitForElement(self::$h3);
        $I->see('Web Development',self::$h3);
        $I->moveMouseOver(self::$ourServicesHeader);
        $I->waitAndClick(self::$designHeader);
        $I->waitForElement(self::$h3);
        $I->see('Design',self::$h3);
        $I->moveMouseOver(self::$ourServicesHeader);
        $I->waitAndClick(self::$bigDataHeader);
        $I->waitForElement(self::$h3);
        $I->see('Big Data & Data Science',self::$h3);
        $I->moveMouseOver(self::$ourServicesHeader);
        $I->waitAndClick(self::$qualityAssuranceAutomation);
        $I->waitForElement(self::$h3);
        $I->see('Quality Assurance & Automation',self::$h3);
        $I->moveMouseOver(self::$ourServicesHeader);
        $I->waitAndClick(self::$documentationHeader);
        $I->waitForElement(self::$h3);
        $I->see('Documentation',self::$h3);
        $I->click(self::$logo);
        $I->seeInCurrentUrl(self::$URL);
        $I->waitForElement(self::$h3MainPage);
        $I->see('Who we are', self::$h3MainPage);


    }

    public function footerLinks()
    {
        $I = $this->tester;
     //   $I->amOnPage(self::$URL);
        $I->scrollTo(self::$privatePolicyFooter);
        $I->click(self::$privatePolicyFooter);
        $I->waitForElement(self::$h3);
        $I->see('Privacy Policy',self::$h3);
        $I->scrollTo(self::$termsOfUseFooter);
        $I->click(self::$termsOfUseFooter);
        $I->waitForElement(self::$h3);
        $I->see('Terms of Use',self::$h3);
        $I->scrollTo(self::$partnersFooter);
        $I->click(self::$partnersFooter);
        $I->waitForElement(self::$h3);
        $I->see('Partners',self::$h3);
        $I->click(self::$logoFooter);
        $I->waitForElement(self::$h3MainPage);
        $I->see('Who we are', self::$h3MainPage);
    }

    public function socialFooterLinks (){
        $I = $this->tester;
      //  $I->amOnPage(self::$URL);
        $I->scrollTo(self::$facebookFooter);
        $I->click(self::$facebookFooter);
        $I->seeInCurrentUrl('/IT.Svit.Team');
        $I->waitForElement(self::$facebookITsvit);
        $I->amOnPage(self::$URL);
        $I->scrollTo(self::$twitterFooter);
        $I->click(self::$twitterFooter);
        $I->seeInCurrentUrl('/itsvit');
        $I->waitForElement(self::$twitterITsvit);
        $I->amOnPage(self::$URL);
        $I->scrollTo(self::$instagramFooter);
        $I->click(self::$instagramFooter);
        $I->seeInCurrentUrl('/itsvit');
        $I->waitForElement(self::$instagramITsvit);
        $I->amOnPage(self::$URL);
        $I->scrollTo(self::$linkedinFooter);
        $I->click(self::$linkedinFooter);
        $I->seeInCurrentUrl('/company/it-svit?trk=top_nav_home');
        $I->waitForElement(self::$linkedinITsvit);
        $I->amOnPage(self::$URL);
        $I->scrollTo(self::$googlePlusFooter);
        $I->click(self::$googlePlusFooter);
        $I->seeInCurrentUrl('/+ItsvitOrg/videos');
       // $I->waitForElement(self::$googlePlusITsvit);
    }


    public function whatsNewBlock(){
        $I = $this->tester;
      //  $I->amOnPage(self::$URL);
        $I->scrollTo(self::$prevButton);
        $I->click(self::$prevButton);
        $I->click(self::$prevButton);
        $I->click(self::$prevButton);
        $I->click(self::$nextButton);
        $I->click(self::$nextButton);
        $I->waitForElementVisible(self::$readMoreLink);
        $I->click(self::$readMoreLink);
        $I->waitForElement(self::$h3def);
      //  $I->click(self::$logo);
      //  $I->waitForElement(self::$nextOurPartnersSliderButton);

    }



// Our Strengths Block
    public static $ourStrengthBlock = '//*[@class="our-strengths"]';
    public static $devopsStrength = '//*[@class="our-strengths"]/div/div/div[1]//a';
    public static $bigDataStrength = '//*[@class="our-strengths"]//div[2]//a';
    public static $softwareStrength = '//*[@class="our-strengths"]//div[3]//a';
    public static $contIntegrStrength = '//*[@class="our-strengths"]//div[4]//a';
    public static $itCloudStrength = '//*[@class="our-strengths"]//div[5]//a';


    public function ourStrengthsBlock(){
        $I = $this->tester;
        $I->scrollTo(self::$ourStrengthBlock);
        $I->click(self::$devopsStrength);
        $I->waitForElement(self::$h3);
        $I->see('DevOps',self::$h3);
        $I->click(self::$logo);
        $I->waitForElement(self::$bigDataStrength);
        $I->scrollTo(self::$ourStrengthBlock);
        $I->click(self::$bigDataStrength);
        $I->waitForElement(self::$h3);
        $I->see('Big Data & Data Science',self::$h3);
        $I->click(self::$logo);
        $I->waitForElement(self::$softwareStrength);
        $I->scrollTo(self::$ourStrengthBlock);
        $I->click(self::$softwareStrength);
        $I->waitForElement(self::$h3);
        $I->see('Software Development',self::$h3);
        $I->click(self::$logo);
        $I->waitForElement(self::$contIntegrStrength);
        $I->scrollTo(self::$ourStrengthBlock);
        $I->click(self::$contIntegrStrength);
        $I->waitForElement(self::$h3);
        $I->see('Continuous Integration',self::$h3);
        $I->click(self::$logo);
        $I->waitForElement(self::$itCloudStrength);
        $I->scrollTo(self::$ourStrengthBlock);
        $I->click(self::$itCloudStrength);
        $I->waitForElement(self::$h3);
        $I->see('IT Cloud Staffing',self::$h3);
        $I->click(self::$logo);
    }

// Slider Block
    public static $ContIntLearnMore = './/div[3]//a/button';
    public static $DataScienceLearnMore = './/div[4]//a/button';


    public function sliderBlock()
    {
        $I = $this->tester;
        $I->amOnPage(self::$URL);
      //  $I->waitForElementVisible(self::$ContIntLearnMore);
        $I->click(self::$ContIntLearnMore);
        $I->waitForElement(self::$h3);
        $I->see('Continuous Integration', self::$h3);
        $I->click(self::$logo);
        $I->waitForElementVisible(self::$DataScienceLearnMore);
        $I->click(self::$DataScienceLearnMore);
        $I->waitForElement(self::$h3);
        $I->see('Big Data & Data Science', self::$h3);
        $I->click(self::$logo);
        $I->waitForElementVisible(self::$nextOurPartnersSliderButton);
    }

//Who we are slider
    public static $devOpsSliderButton = '//*[@id="about-us-slider"]/div[2]/div[2]/div[1]';
    public static $assertDevOpsSlider = '//div[3]//h3[text()="DevOps"]';
    public static $contIntSliderButton = '//*[@id="about-us-slider"]/div[2]/div[2]/div[2]';
    public static $assertContInt = '//div[4]//h3[text()="Continuous Integration"]';



    public function whoWeAreSlider(){
        $I = $this->tester;
     //   $I->amOnPage(self::$URL);
        $I->click(self::$contIntSliderButton);
        $I->waitForElementVisible(self::$assertContInt);
        $I->click(self::$devOpsSliderButton);
        $I->waitForElementVisible(self::$assertDevOpsSlider);
        $I->click(self::$contIntSliderButton);
        $I->waitForElementVisible(self::$assertContInt);
        $I->click(self::$devOpsSliderButton);
        $I->waitForElementVisible(self::$assertDevOpsSlider);
    }

 // Our Partners slider
    public static $nextOurPartnersSliderButton = '//*[@id="partners-slider"]/div[2]/div[2]//div[2]';
    public static $prevOurPartnersSliderButton = '//*[@id="partners-slider"]/div[2]/div[2]//div[1]';
    public static $hoeSchoeOurPartners ='.//*[@id="partners-slider"]//div[9]//img';

    public function ourPartnersSlider(){
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->scrollTo(self::$nextOurPartnersSliderButton);
        $I->click(self::$nextOurPartnersSliderButton);
        $I->waitForElementVisible(self::$hoeSchoeOurPartners);
        $I->click(self::$prevOurPartnersSliderButton);
        $I->waitForElementNotVisible(self::$hoeSchoeOurPartners);
        }


}