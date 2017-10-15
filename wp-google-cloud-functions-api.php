<?php
/**
 * WP Google Cloud Functions API
 *
 * @link https://cloud.google.com/functions/docs/reference/rest/
 * @package WP-API-Libraries\WP-Cloud-Functions-API
 */
/*
* Plugin Name: WP Cloud Functions API
* Plugin URI: https://github.com/wp-api-libraries/wp-google-cloud-functions-api
* Description: Perform API requests to Google Cloud Functions in WordPress.
* Author: WP API Libraries
* Version: 1.0.2
* Author URI: https://wp-api-libraries.com
* GitHub Plugin URI: https://github.com/wp-api-libraries/wp-google-cloud-functions-api
* GitHub Branch: master
*/
/* Exit if accessed directly. */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* Check if class exists. */
if ( ! class_exists( 'GoogleCloudFunctionsAPI' ) ) {
	
	/**
	 * GoogleCloudFunctionsAPI Class.
	 */
	class GoogleCloudFunctionsAPI {
		
		/**
		 * BaseAPI Endpoint
		 *
		 * @var string
		 * @access protected
		 */
		protected $base_uri = 'https://cloudfunctions.googleapis.com';

	}
	
	/* Collection: v1beta2.operations */
	
	public function get_long_operations() {
		
	}
	
	public function list_operations() {
		
	}
	
	/* Collection: v1beta2.projects.locations */
	
	public function list_locations() {
		
	}
	
	/* Collection: v1beta2.projects.locations.functions */
	
	public function call_functions() {
		
	}
	
	public function create_function() {
		
	}
	
	public function delete_function() {
		
	}
	
	public function get_function() {
		
	}
	
	public function list_function() {
		
	}
	
	public function update_function() {
		
	}
}