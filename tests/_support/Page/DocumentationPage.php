<?php
/**
 * Created by PhpStorm.
 * User: obana
 * Date: 20.09.16
 * Time: 16:02
 */

namespace Page;


class DocumentationPage
{
    public static $URL = '/itsvit_our_services/documentation/';

//Features
    public static $businessContinuityDocuments = '//*[@class ="item-head"]//h5[text()="Business Continuity Documents"]';
    public static $popBusinessContinuityDocuments = '//*[@class ="popup-full-name"]//h5[text()="Business Continuity Documents"]';
    public static $userManualsGuidesFAQsReports = '//*[@class ="item-head"]//h5[text()="User manuals, guides, FAQs, reports"]';
    public static $popUpUserManualsGuidesFAQsReports = '//*[@class ="popup-full-name"]//h5[text()="User manuals, guides, FAQs, reports"]';
    public static $qualityAssuranceDocuments = '//*[@class ="item-head"]//h5[text()="Quality Assurance Documents"]';
    public static $popQualityAssuranceDocuments = '//*[@class ="popup-full-name"]//h5[text()="Quality Assurance Documents"]';
    public static $DocumentManagementSystems = '//*[@class ="item-head"]//h5[text()="Document Management Systems"]';
    public static $popUpDocumentManagementSystems = '//*[@class ="popup-full-name"]//h5[text()="Document Management Systems"]';
    public static $documentMigration = '//*[@class ="item-head"]//h5[text()="Document Migration"]';
    public static $popUpDocumentMigration= '//*[@class ="popup-full-name"]//h5[text()="Document Migration"]';


    public static $fullText = '//*[@class = "full-text"]';
    public static $closeButton = '//*[@title="Close (Esc)"]';

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function documentationFeatures (){
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->scrollTo(self::$businessContinuityDocuments);
        $I->click(self::$businessContinuityDocuments);
        $I->waitForElementVisible(self::$popBusinessContinuityDocuments);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$userManualsGuidesFAQsReports);
        $I->click(self::$userManualsGuidesFAQsReports);
        $I->waitForElementVisible(self::$popUpUserManualsGuidesFAQsReports);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$qualityAssuranceDocuments);
        $I->click(self::$qualityAssuranceDocuments);
        $I->waitForElementVisible(self::$popQualityAssuranceDocuments);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$DocumentManagementSystems);
        $I->click(self::$DocumentManagementSystems);
        $I->waitForElementVisible(self::$popUpDocumentManagementSystems);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$documentMigration);
        $I->click(self::$documentMigration);
        $I->waitForElementVisible(self::$popUpDocumentMigration);
        $I->click(self::$closeButton);
    }



}