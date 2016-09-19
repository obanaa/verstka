<?php
/**
 * Created by PhpStorm.
 * User: obana
 * Date: 16.09.16
 * Time: 10:54
 */

namespace Page;


class DevOpsPage
{

    public static $URL = '/itsvit_our_services/devops/';

//Features
    public static $virtualization = '//*[@class ="item-head"]//h5[text()="Virtualization"]';
    public static $popUpVirtualization = '//*[@class ="popup-full-name"]//h5[text()="Virtualization"]';
    public static $CiCd = '//*[@class ="item-head"]//h5[text()="CI/CD"]';
    public static $popUpCiCd = '//*[@class ="popup-full-name"]//h5[text()="CI/CD"]';
    public static $AWS = '//*[@class ="item-head"]//h5[text()="AWS"]';
    public static $popUpAWS = '//*[@class ="popup-full-name"]//h5[text()="AWS"]';
    public static $BigData = '//*[@class ="item-head"]//h5[text()="Big Data, Distributed Storage/Computing"]';
    public static $popUpBigData = '//*[@class ="popup-full-name"]//h5[text()="Big Data, Distributed Storage/Computing"]';
    public static $HostingProviders = '//*[@class ="item-head"]//h5[text()="Hosting Providers"]';
    public static $popUpHostingProviders = '//*[@class ="popup-full-name"]//h5[text()="Hosting Providers"]';
    public static $Administration = '//*[@class ="item-head"]//h5[text()="Administration"]';
    public static $popUpAdministration = '//*[@class ="popup-full-name"]//h5[text()="Administration"]';
    public static $GitBasedVCSInt = '//*[@class ="item-head"]//h5[text()="Git-based VCS Integration"]';
    public static $popUpGitBasedVCSInt = '//*[@class ="popup-full-name"]//h5[text()="Git-based VCS Integration"]';
    public static $Migration = '//*[@class ="item-head"]//h5[text()="Migration"]';
    public static $popUpMigration = '//*[@class ="popup-full-name"]//h5[text()="Migration"]';
    public static $TechSupport = '//*[@class ="item-head"]//h5[text()="Tech Support"]';
    public static $popUpTechSupport = '//*[@class ="popup-full-name"]//h5[text()="Tech Support"]';

    public static $fullText = '//*[@class = "full-text"]';
    public static $closeButton = '//*[@title="Close (Esc)"]';

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }


    public function devOpsFeatures (){
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->scrollTo(self::$Migration);
        $I->click(self::$virtualization);
        $I->waitForElementVisible(self::$popUpVirtualization);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$CiCd);
        $I->click(self::$CiCd);
        $I->waitForElementVisible(self::$popUpCiCd);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$AWS);
        $I->click(self::$AWS);
        $I->waitForElementVisible(self::$popUpAWS);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$BigData);
        $I->click(self::$BigData);
        $I->waitForElementVisible(self::$popUpBigData);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$HostingProviders);
        $I->click(self::$HostingProviders);
        $I->waitForElementVisible(self::$popUpHostingProviders);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$Administration);
        $I->click(self::$Administration);
        $I->waitForElementVisible(self::$popUpAdministration);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$GitBasedVCSInt);
        $I->click(self::$GitBasedVCSInt);
        $I->waitForElementVisible(self::$popUpGitBasedVCSInt);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$Migration);
        $I->click(self::$Migration);
        $I->waitForElementVisible(self::$popUpMigration);
        $I->click(self::$closeButton);
        $I->waitForElementVisible(self::$TechSupport);
        $I->click(self::$TechSupport);
        $I->waitForElementVisible(self::$popUpTechSupport);
        $I->click(self::$closeButton);




    }

}