<?php
require_once APPPATH.'vendor/autoload.php';
use PhpOffice\PhpWord\PhpWord;

class Phpword {

    public function __construct()
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
    }
}