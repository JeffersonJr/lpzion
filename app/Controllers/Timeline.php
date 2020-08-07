<?php namespace App\Controllers;

use Symfony\Component\DomCrawler\Crawler;

class Timeline extends BaseController
{
    function index(){

        return view('timeline');
    }
}
