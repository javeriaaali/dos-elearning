<?php

global $project;
$project = 'mysite';

global $database;
$database = 'dos-elearning';

require_once('conf/ConfigureFromEnv.php');

// Set the site locale
i18n::set_locale('en_US');

if(Director::isLive()) {
	Director::forceSSL(array('/^Security/','/^admin/'));
}
