<?php
/*
Plugin Name: Plugin Central
Plugin URI: https://github.com/mindsharestudios/plugin-central
Description: Receive dashboard plugin update notifications with changelogs, update all plugins at once, move your plugins from one blog to another.
Version: 2.6
Author: Mindshare Studios, Inc.
Author URI: http://mind.sh/are/
License: GNU General Public License
License URI: license
Text Domain: plugin-central
Domain Path: /lang
*/

/**
 *
 * Copyright 2015  Mindshare Studios, Inc. (https://mind.sh/are/)
 *
 * Original work by in 2008 by Vladimir Prelovac
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 3, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 */

if (isset($plugin_central)) {
	return FALSE;
}

require_once(dirname(__FILE__) . '/plugin-central.class.php');

$plugin_central = new PluginCentral();
