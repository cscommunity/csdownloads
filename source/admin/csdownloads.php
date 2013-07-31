<?php

// include defines.php
include_once dirname(__FILE__).'/includes/defines.php';

// loader
require_once dirname(__FILE__).'/includes/includes.php';

$app 	= CSDownloadsFactory::getApplication();
$input 	= $app->input;

$view	= $input->get('view', 'dashboard');
$task	= $input->get('task', 'display');

// TODO : Trigger here onBeforeContollerCreation
$controller = CSDownloadsFactory::get_instance($view, 'controller', CSDOWNLOADS_PREFIX.'admin', array('input' => $input));
$controller->execute($task);