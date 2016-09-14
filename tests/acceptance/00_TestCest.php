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

    function T2MainPageSliderBlockLinks( \Page\MainPage $mainPage){
        $mainPage->whoWeAreSlider();
        $mainPage->sliderBlock();
        $mainPage->ourPartnersSlider();    }

    function T3MainPageWhoWeAreSliderBlock( \Page\MainPage $mainPage) {
        $mainPage->whoWeAreSlider();
        $mainPage->ourPartnersSlider();    }

    function T4MainPageOurStrengthsBlock( \Page\MainPage $mainPage) {
        $mainPage->ourStrengthsBlock();    }

    function T5MainPageWhatsNewBlock( \Page\MainPage $mainPage) {
        $mainPage->whatsNewBlock();    }

    function T6FooterLinks( \Page\MainPage $mainPage) {
        $mainPage->footerLinks();
        $mainPage->socialFooterLinks();    }

    function T7OurServicesPage( \Page\OurServicesPage $ourServicesPage) {
        $ourServicesPage->pageNavigation(); }

    function T8AboutUsPageInstagramBlock( \Page\AboutUsPage $aboutUsPage) {
        $aboutUsPage->aboutUsInstagramBlock(); }

    function T9ContactsPageInvalidDataLeaveAMessageBlock( \Page\ContactsPage $contactsPage) {
        $contactsPage->invalidLeaveAMessageData('INVALID'); }


    function T10ContactsPageInvalidDataLeaveAMessageBlock( \Page\ContactsPage $contactsPage) {
        $contactsPage->validLeaveAMessageData('Test','test@test.com','test message'); }

































}

