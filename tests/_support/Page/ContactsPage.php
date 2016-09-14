<?php
/**
 * Created by PhpStorm.
 * User: obana
 * Date: 14.09.16
 * Time: 12:27
 */

namespace Page;


class ContactsPage
{

    public static $URL = '/contacts';

// Leave a message Block
    public static $nameField = '//*[@id="wpcf7-f163-p10-o1"]/form/p[1]/span[1]/input';
    public static $phoneField = '//*[@id="wpcf7-f163-p10-o1"]/form/p[1]/span[2]/input';
    public static $emailField = '//*[@id="wpcf7-f163-p10-o1"]/form/p[1]/span[3]/input';
    public static $countryField = '//*[@id="wpcf7-f163-p10-o1"]/form/p[1]/span[4]/input';
    public static $messageField = '//*[@id="wpcf7-f163-p10-o1"]/form/p[1]/span[5]/textarea';
    public static $sendButton = '//*[@id="wpcf7-f163-p10-o1"]//button';
    public static $alertMessages = '//*[@role="alert"]';
    public static $okMsgSend = '//div[2][text()="Thank you for your message. It has been sent."]';


    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function invalidLeaveAMessageData ($invalidData){
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->scrollTo(self::$sendButton);
        $I->click(self::$sendButton);
        $I->waitForElementVisible(self::$alertMessages);
        $I->fillField(self::$nameField,$invalidData);
        $I->click(self::$sendButton);
        $I->waitForElementVisible(self::$alertMessages);
        $I->click(self::$sendButton);
        $I->waitForElementVisible(self::$alertMessages);
        $I->fillField(self::$emailField,$invalidData);
        $I->click(self::$sendButton);
        $I->waitForElementVisible(self::$alertMessages);
        $I->fillField(self::$messageField,$invalidData);
        $I->click(self::$sendButton);
        $I->waitForElementVisible(self::$alertMessages);
    }

    public function validLeaveAMessageData ($name,$email,$message){
        $I = $this->tester;
        $I->amOnPage(self::$URL);
        $I->scrollTo(self::$sendButton);
        $I->fillField(self::$nameField,$name);
        $I->fillField(self::$emailField,$email);
        $I->fillField(self::$messageField,$message);
        $I->click(self::$sendButton);
        $I->waitForElementVisible(self::$okMsgSend);
    }








}