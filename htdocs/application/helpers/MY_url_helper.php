<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if ( ! function_exists('proj_name')) {
	/**
	 * Project Name
	 *
	 * The Name of this application/project.
	 *
	 * @return	string
	 */
	function proj_name() {
		return get_instance()->config->item('proj_name');
	}
}

if ( ! function_exists('proj_url')) {
	/**
	 * Project URL
	 *
	 * The URL of this application/project.
	 *
	 * @return	string
	 */
	function proj_url() {
		return get_instance()->config->item('proj_url');
	}
}
