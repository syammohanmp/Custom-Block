<?php

// no direct access
defined('_JEXEC') or die ;


$getTemplate = $params->get('getTemplate', 'default');
require (JModuleHelper::getLayoutPath('mod_custom_block', $getTemplate.DS.'default'));