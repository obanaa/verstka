<?php
/**
 * Created by PhpStorm.
 * User: obana
 * Date: 07.10.16
 * Time: 16:57
 */

namespace Page;


class PortfolioPage
{

    public static $URL = '/portfolio/';

    public static $allButton = '//li[text()="All"]';
    public static $webDevButton = '//li[text()="Web Development"]';
    public static $qaAutomationButton = '//li[text()="QA & Automation"]';
    public static $documentationButton = '//li[text()="Documentation"]';
    public static $devOpsButton = '//li[text()="DevOps"]';
    public static $designButton = '//li[text()="Design"]';
    public static $bigDataDataScienceButton = '//li[text()="Big Data & Data Science"]';

    public static $categoryItems = './/*[@class = "categoty-item"]';

// Web Development page tabs
    public static $webDevItem = '//div[text()="Web Development"]';
    public static $wordPressItem = '//div[text()="WordPress E-Commerce"]';
    public static $WordPressECommerceWebDevButton = '//li[text()="WordPress E-Commerce"]';
    public static $PluginsMagentoWordPressJoomlaWebDevButton = '//li[text()="Plugins For Magento, WordPress, Joomla"]';
    public static $OpenCartECommerceWebDevButton = '//li[text()="OpenCart E-Commerce"]';
    public static $MagentoECommerceWebDevButton = '//li[text()="Magento E-Commerce"]';
    public static $customWebSolutionItem = '//div[text()="Custom Web Solutions"]';
    public static $CustomWebSolutionsWebDevButton = '//li[text()="Custom Web Solutions"]';

// QA page tabs
    public static $QAItems = '//div[text()="QA & Automation"]';
    public static $WebApplicationTestingQAButton = '//li[text()="Web Application Testing"]';
    public static $WebAppTestQAItems = '//div[text()="Web Application Testing"]';
    public static $mobileApplicationTestingQAButton = '//li[text()="Mobile Application Testing"]';
    public static $mobileAppTestQAItems = '//div[text()="Mobile Application Testing"]';
    public static $DesktopApplicationTestingQAButton = '//li[text()="Desktop Application Testing"]';
    public static $desktopAppTestQAItems = '//div[text()="Desktop Application Testing"]';

// Documentation page tabs
    public static $documentationItems = '//div[text()="Documentation"]';
    public static $UserManualsGuideDocButton = '//li[text()="User Manuals & Guides"]';
    public static $UserManualsGuideDocItems = '//div[text()="User Manuals & Guides"]';
    public static $qualityAssuranceDocumentsDocButton = '//li[text()="Quality Assurance Documents"]';
    public static $documentMigrationDocButton = '//li[text()="Document Migration"]';
    public static $documentManagementSystemsDocButton = '//li[text()="Document Management Systems"]';
    public static $businessContinuityDocButton = '//li[text()="Business Continuity"]';
    public static $businessContinuityItems = '//div[text()="Business Continuity"]';

// DevOps page tabs
    public static $devOpsItems = '//div[text()="DevOps"]';
    public static $virtualizationDevOpsButton = '//li[text()="Virtualization"]';
    public static $techSupportDevOpsButton = '//li[text()="Tech Support"]';
    public static $techSupportItems = '//div[text()="Tech Support"]';
    public static $migrationDevOpsButton = '//li[text()="Migration"]';
    public static $hostingProvidersDevOpsButton = '//li[text()="Hosting Providers"]';
    public static $gitBasedVCSIntegrationDevOpsButton = '//li[text()="Git-based VCS Integration"]';
    public static $cICDDevOpsButton = '//li[text()="CI/CD"]';
    public static $bigDataDevOpsButton = '//li[text()="Big Data, Distributed Computing and Storage"]';
    public static $AWSDevOpsButton = '//li[text()="AWS"]';
    public static $administrationDevOpsButton = '//li[text()="Administration"]';

// Design
    public static $webDesignItems = '//div[text()="Design"]';
    public static $wireframingPrototypingDesignButton = '//li[text()="Wireframing, Prototyping"]';
    public static $websiteDesignButton = '//li[text()="Website Design"]';
    public static $websiteDesignItems = '//div[text()="Website Design"]';
    public static $UXUIDesignButton = '//li[text()="UX/UI"]';
    public static $uxUiItems = '//div[text()="UX/UI"]';
    public static $polygraphyDesignButton = '//li[text()="Polygraphy"]';
    public static $logosBrandingStyleDesignButton = '//li[text()="Logos and Branding Style"]';
    public static $logosBrandingStyleItems = '//div[text()="Logos and Branding Style"]';
    public static $mobileApplicationsDesignButton = '//li[text()="Design Mobile Applications"]';

// Big Data & Data Science
    public static $bigDataItems = '//div[text()="Big Data & Data Science"]';
    public static $crawlersBigDataButton = '//li[text()="Web Crawlers"]';
    public static $infrastructureBigDataButton = '//li[text()="Infrastructure For Big Data"]';
    public static $dataProcessorsBigDataButto = '//li[text()="Data Processors"]';
    public static $classifiersBigDataButton = '//li[text()="Classifiers"]';


    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }


    public function portfolioTabs(){
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->waitAndClick(self::$webDevButton);
        $I->waitForElement(self::$webDevItem);
        $I->waitAndClick(self::$qaAutomationButton);
        $I->waitForElement(self::$QAItems);
        $I->waitAndClick(self::$documentationButton);
        $I->waitForElement(self::$documentationItems);
        $I->waitAndClick(self::$devOpsButton);
        $I->waitForElement(self::$devOpsItems);
        $I->waitAndClick(self::$designButton);
        $I->waitForElement(self::$webDesignItems);
        $I->waitAndClick(self::$bigDataDataScienceButton);
        $I->waitForElement(self::$bigDataItems);
    }

    public function webDevelopmentTabs(){
        $I = $this->tester;
        $I->waitAndClick(self::$webDevButton);
        $I->waitForElementVisible(self::$webDevItem);
        $I->waitAndClick(self::$WordPressECommerceWebDevButton);
        $I->waitForElementVisible(self::$wordPressItem);
        $I->waitAndClick(self::$PluginsMagentoWordPressJoomlaWebDevButton);
        $I->waitForElementNotVisible(self::$wordPressItem);
        $I->waitAndClick(self::$OpenCartECommerceWebDevButton);
        $I->waitForElementNotVisible(self::$wordPressItem);
        $I->waitAndClick(self::$MagentoECommerceWebDevButton);
        $I->waitForElementNotVisible(self::$wordPressItem);
        $I->waitAndClick(self::$CustomWebSolutionsWebDevButton);
        $I->waitForElementVisible(self::$customWebSolutionItem);
    }

    public function qaTabs(){
        $I = $this->tester;
        $I->waitAndClick(self::$qaAutomationButton);
        $I->waitForElementVisible(self::$QAItems);
        $I->waitAndClick(self::$mobileApplicationTestingQAButton);
        $I->waitForElementNotVisible(self::$QAItems);
        $I->waitAndClick(self::$DesktopApplicationTestingQAButton);
        $I->waitForElementNotVisible(self::$QAItems);
        $I->waitAndClick(self::$WebApplicationTestingQAButton);
        $I->waitForElementVisible(self::$QAItems);
    }

    public function documentationTabs(){
        $I = $this->tester;
        $I->waitAndClick(self::$documentationButton);
        $I->waitForElementVisible(self::$documentationItems);
        $I->waitAndClick(self::$UserManualsGuideDocButton);
        $I->waitForElementVisible(self::$UserManualsGuideDocItems);
        $I->waitAndClick(self::$qualityAssuranceDocumentsDocButton);
        $I->waitForElementNotVisible(self::$documentationItems);
        $I->waitAndClick(self::$documentMigrationDocButton);
        $I->waitForElementNotVisible(self::$documentationItems);
        $I->waitAndClick(self::$documentManagementSystemsDocButton);
        $I->waitForElementNotVisible(self::$documentationItems);
        $I->waitAndClick(self::$businessContinuityDocButton);
        $I->waitForElementVisible(self::$businessContinuityItems);
    }


    public function devOpsTabs(){
        $I = $this->tester;
        $I->waitAndClick(self::$devOpsButton);
        $I->waitForElementVisible(self::$devOpsItems);
        $I->waitAndClick(self::$virtualizationDevOpsButton);
        $I->waitForElementNotVisible(self::$devOpsItems);
        $I->waitAndClick(self::$techSupportDevOpsButton);
        $I->waitForElementVisible(self::$techSupportItems);
        $I->waitAndClick(self::$migrationDevOpsButton);
        $I->waitForElementNotVisible(self::$devOpsItems);
        $I->waitAndClick(self::$hostingProvidersDevOpsButton);
        $I->waitForElementNotVisible(self::$devOpsItems);
        $I->waitAndClick(self::$gitBasedVCSIntegrationDevOpsButton);
        $I->waitForElementNotVisible(self::$devOpsItems);
        $I->waitAndClick(self::$cICDDevOpsButton);
        $I->waitForElementNotVisible(self::$devOpsItems);
        $I->waitAndClick(self::$bigDataDevOpsButton);
        $I->waitForElementNotVisible(self::$devOpsItems);
        $I->waitAndClick(self::$AWSDevOpsButton);
        $I->waitForElementNotVisible(self::$devOpsItems);
        $I->waitAndClick(self::$administrationDevOpsButton);
        $I->waitForElementNotVisible(self::$devOpsItems);
    }

    public function designTabs(){
        $I = $this->tester;
        $I->waitAndClick(self::$designButton);
        $I->waitForElementVisible(self::$webDesignItems);
        $I->waitAndClick(self::$wireframingPrototypingDesignButton);
        $I->waitForElementNotVisible(self::$webDesignItems);
        $I->waitAndClick(self::$websiteDesignButton);
        $I->waitForElementVisible(self::$websiteDesignItems);
        $I->waitAndClick(self::$UXUIDesignButton);
        $I->waitForElementVisible(self::$uxUiItems);
        $I->waitAndClick(self::$polygraphyDesignButton);
        $I->waitForElementNotVisible(self::$webDesignItems);
        $I->waitAndClick(self::$logosBrandingStyleDesignButton);
        $I->waitForElementVisible(self::$logosBrandingStyleItems);
        $I->waitAndClick(self::$mobileApplicationsDesignButton);
        $I->waitForElementNotVisible(self::$webDesignItems);
    }

    public function bigDataTabs(){
        $I = $this->tester;
        $I->waitAndClick(self::$bigDataDataScienceButton);
        $I->waitForElementVisible(self::$bigDataItems);
        $I->waitAndClick(self::$crawlersBigDataButton);
        $I->waitForElementNotVisible(self::$bigDataItems);
        $I->waitAndClick(self::$infrastructureBigDataButton);
        $I->waitForElementNotVisible(self::$bigDataItems);
        $I->waitAndClick(self::$dataProcessorsBigDataButto);
        $I->waitForElementNotVisible(self::$bigDataItems);
        $I->waitAndClick(self::$classifiersBigDataButton);
        $I->waitForElementNotVisible(self::$bigDataItems);
    }



}