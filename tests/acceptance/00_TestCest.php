<?php
use \Step\Acceptance;

/**
 * @group test
 */
class TestCest
{
/*
    function T1Links( \Page\MainPage $mainPage)
    {
        $mainPage->headerLinks();
        $mainPage->footerLinks();
        $mainPage->socialFooterLinks();
        $mainPage->whatsNewBlock();
    }
*/

/**/
    function T1HeaderLinks( \Page\MainPage $mainPage){
        $mainPage->headerLinks();  }

    function T2FooterLinks( \Page\MainPage $mainPage) {
        $mainPage->footerLinks();
        $mainPage->socialFooterLinks();    }

    function T3MainPage( \Page\MainPage $mainPage){
        $mainPage->whoWeAreSlider();
        $mainPage->sliderBlock();
        $mainPage->ourPartnersSlider();
        $mainPage->ourStrengthsBlock();
        $mainPage->whatsNewBlock();         }

    function T4OurServicesPage( \Page\OurServicesPage $ourServicesPage) {
        $ourServicesPage->pageNavigation(); }

    function T5AboutUsPage( \Page\AboutUsPage $aboutUsPage) {
        $aboutUsPage->aboutUsInstagramBlock(); }

    function T6ContactsPageLeaveAMessageBlock( \Page\ContactsPage $contactsPage) {
        $contactsPage->invalidLeaveAMessageData('INVALID');
        $contactsPage->validLeaveAMessageData('Test','test@test.com','test message'); }

    function T7DevOpsPage( \Page\DevOpsPage $devOpsPage) {
        $devOpsPage->devOpsFeatures();      }

    function T8WebDevelopmentPage( \Page\WebDevPage $webDevPage){
        $webDevPage ->webDevFeatures();     }

    function T9BlogPage (\Page\BlogPage $blogPage){
        $blogPage->pageNavigation();
        $blogPage->checkBlocks();
    }


}

