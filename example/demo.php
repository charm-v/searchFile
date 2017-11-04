<?php
require(dirname(__DIR__) . '/vendor/autoload.php');

$searchFile = new \Mingzhongshui\File\SearchFile();

dump($searchFile->searchAllFile("E:\WWW\\test\me-packgist\me"));
