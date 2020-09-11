<?php
/**
* Plugin Name: Extra Settings for Jetpack
* Plugin URI: github.com/cumulus-digital/wp-jetpack-extra_settings
* GitHub Plugin URI: cumulus-digital/wp-jetpack-extra_settings
* Description: A simple plugin to add additional settings to Jetpack
* Version:  0.1
* Author: Daniel Vena
* Author URI: cumulusmedia.com
* License: GPL2
*/
namespace WP_JETPACK_EXTRA;
if (!defined('ABSPATH')) die('No direct access allowed');

const PLUGIN_NAME = 'wp-jetpack-extra_settings';
const PREFIX = 'wp-jetpack-extra_settings';
const TXTDOMAIN = PREFIX;
const BASEPATH = __DIR__;
const BASE_FILENAME = PLUGIN_NAME . DIRECTORY_SEPARATOR . PLUGIN_NAME . '.php';

require_once BASEPATH . '/options.php';
