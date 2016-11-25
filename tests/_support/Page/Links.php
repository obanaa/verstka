<?php
/**
 * Created by PhpStorm.
 * User: obana
 * Date: 24.11.16
 * Time: 10:56
 */

namespace Page;


class Links
{


    protected $tester;
    protected $file;
    protected $urls;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
        $this->file = __DIR__ . '/sitemap.xml';
        $this->urls = [];
    }

    public function pageAndScreen ()
    {
        $this->urls = $this->getListUrl();
        $I = $this->tester;
        $number =1;
        foreach($this->urls as $url){
            $I->amOnUrl($url);
            $I->scrollDown(1100);
          #  $I->seeInCurrentUrl($url);
            $link = parse_url($url);
            $uri =  preg_replace( '/\//', '_' ,$link['path']);
            $I->makeScreenshot('itsit_' . $uri. '_' .$number . '.png');
            $number++;
        }
    }

    private function getListUrl()
    {
        $xml = simplexml_load_file($this->file);
        foreach ($xml as $page) {
            $this->urls[] = (string) $page->loc;
        }
        return $this->urls;
    }



}


