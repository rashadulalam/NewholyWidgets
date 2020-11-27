<?php
/**
 * Plugin Name: Newholy Widgets
 * Plugin URI: http://github.com/rashadulalam
 * Description: A Plugin for Newholy
 * Version: 1.0
 * Author: Rashadul Alam
 * Author URI: http://github.com/rashadulalam
 * License: GPL2
 * Text Domain: nhwidget
 * Domain Path: /languages
 * 
 */

 /*
 * Copyright (c) 2020 Tareq Hasan (email: tareq@wedevs.com). All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 * **********************************************************************
 */

 // don't call the file directly
 if( ! defined( 'ABSPATH' ) ) {
    exit;
 }


final class NewholyWidgets {
    
    /**
     * Plugin version
     * 
     * @var string 
     */

     const version = '1.0';

     /**
      * Class constructor
      */
      private function __construct() {

      }


      /**
       * Initializes a singleton instance
       * 
       * @return /NewholyWidgets
       */
      public static function init() {
          static $instance = false;

          if( ! $instance ) {
            $instance = new self();
          }
          return $instance;
      }
}


/**
 * Initializes the main plugin
 * 
 * @return NewholyWidgets
 */
function NewholyWidgets() {
  return NewholyWidgets::init();
}

// kick-off the plugin
NewholyWidgets();

