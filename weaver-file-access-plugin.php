<?php
/*
Plugin Name: Weaver File Access Plugin
Plugin URI: http://wpweaver.info
Description: This plugin for the Weaver theme allows Weaver 2.2 and later to work properly on hosts that require FTP access to create files. This plugin has no settings.
Version: 1.0
Author: Bruce Wampler
Author URI: http://weaverplus.info
Text Domain: weaverplus
Copyright: 2009-2011, Bruce E. Wampler

This code is Copyright 2011 by Bruce E. Wampler, all rights reserved.
This code is licensed under the terms of the  GNU general public license (version 2, June 1991 http://www.gnu.org/licenses/gpl.html)

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

function weaver_fileio_plugin() {

}

function weaver_fp_open($fn, $how) {
    return fopen($fn, $how);			// Weaver opening a file to read/write settings
}
function weaver_fp_write($fn,$data) {
    return fwrite($fn,$data);			// Weaver saving settings
}
function weaver_fp_close($fn) {
    return fclose($fn);				// Weaver is done with a file
}

function weaver_filep_delete($fn) {
    return @unlink($fn);
}

function weaver_pis_writable($fn) {
    return @is_writable($fn);
}

function weaver_fp_touch($fn) {
    return @touch($fn, time(), time());
}

function weaver_fp_mkdir($fn) {
    return wp_mkdir_p($fn);
}
// functions for reading files

function weaver_filep_exists($fn) {
    return @file_exists($fn);
}

function weaver_filep_get_contents($fn) {
    return file_get_contents($fn);

}

?>
