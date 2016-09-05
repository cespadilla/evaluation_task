<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package     CodeIgniter
 * @author      ExpressionEngine Dev Team
 * @copyright   Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license     http://codeigniter.com/user_guide/license.html
 * @link        http://codeigniter.com
 * @since       Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------



/**
 * CodeIgniter String Helpers
 *
 * @package     CodeIgniter
 * @subpackage  Helpers
 * @category    Helpers
 * @author      ExpressionEngine Dev Team
 * @link        http://codeigniter.com/user_guide/helpers/string_helper.html
 */

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('out_json')) {
    function out_json($arr) {
        die(json_encode($arr));
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('error_msg')) {
    function error_msg($msg) {
        die(json_encode(array('success' => false, 'data' => $msg)));
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('success_msg')) {
    function success_msg($msg) {
        die(json_encode(array('success' => true, 'data' => $msg)));
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('uclower')) {
    function uclower($str) {
        return ucwords(strtolower($str));
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('object_to_array')) {
    function object_to_array($data) {
        if (is_array($data) || is_object($data)) {
            $result = array();
            foreach ($data as $key => $value) {
                $result[$key] = object_to_array($value);
            }
            return $result;
        }
        return $data;
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('get_between_string')) {
    function get_between_string($content, $start, $end) {
        $r = explode($start, $content);
        
        if (isset($r[1])) {
            $r = explode($end, $r[1]);
            return $r[0];
        }
        return '';
    }
}

if (!function_exists('get_between_block')) {
    function get_between_block($content, $start, $end) {
        $block_start = '<h2>Result';
        $block_body = get_between_string($content, $block_start, $end);
        
        return get_between_string($block_body, $start, $end);
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('print_d')) {
    function print_d($arr) {
        print '<pre>';
        print_r($arr);
        die();
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('get_sc')) {
    function get_sc($fields, $query) {
        return "(" . implode(" like '%$query%'  or ", $fields) . " like '%$query%' )";
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('num_to_alpha')) {
    function num_to_alpha($n) {
        for ($r = ""; $n >= 0; $n = intval($n / 26) - 1) {
            $r = chr($n % 26 + 0x41) . $r;
        }
        
        return $r;
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('json_adecode')) {
    function json_adecode($obj) {
        return (array)json_decode($obj);
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('time_diff')) {
    function time_diff($from = null, $to = null) {
        $seconds = strtotime($to) - strtotime($from);
        
        $hour = floor($seconds / (60 * 60));
        $seconds = $seconds - ($hour * (60 * 60));
        
        $minutes = floor($seconds / 60);
        $seconds = $seconds - ($minutes * 60);
        
        return round($hour + ($minutes / 60 + $seconds / 60 / 60), 5);
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('ellipsis')) {
    function ellipsis($string, $limit) {
        return (strlen($string) > $limit) ? substr($string, 0, $limit) . '..' : $string;
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('dt_format')) {
    function dt_format($format, $date) {
        return date($format, strtotime($date));
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('get_icons')) {
    function get_icons() {
        $icon_list = scandir('images/icons');
        
        $str = '<style type="text/css">';
        foreach ($icon_list as $icon) {
            if (strlen($icon) > 5) $str.= ".icon-" . basename($icon, ".png") . "{background-image: url(" . base_url() . "images/icons/{$icon}) !important;}";
        }
        $str.= '</style>';
        
        return $str;
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('rmfolders')) {
    function rmfolders($dir) {
        $files = scandir($dir);
        
        foreach ($files as $file) {
            if (is_dir($dir . '\\' . $file)) {
                $subdir = $dir . '\\' . $file;
                $subfiles = scandir($subdir);
                
                foreach ($subfiles as $val) {
                    if (is_file($val)) {
                        copy($subdir . '\\' . $val, $dir . '\\' . $val);
                    }
                }
                
                rmdir2($subdir);
            }
        }
        
        return $data;
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('rmdir2')) {
    function rmdir2($dir) {
        if (!is_dir($dir)) {
            return;
        }
        if (substr($dir, strlen($dir) - 1, 1) != '/') {
            $dir.= '/';
        }
        
        $files = glob($dir . '*', GLOB_MARK);
        foreach ($files as $file) {
            if (is_dir($file)) {
                rmdir2($file);
            } 
            else {
                unlink($file);
            }
        }
        rmdir($dir);
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('mkdir2')) {
    function mkdir2($dir, $mode = 0777) {
        if (!is_dir($dir)) {
            mkdir($dir, $mode);
        }
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('unlink2')) {
    function unlink2($file) {
        if (is_file($file)) {
            unlink($file);
        }
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('read_csv')) {
    function read_csv($file) {
        $data = array();
        if (($handle = fopen($file, "r")) !== FALSE) {
            while (($raw = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $data[] = $raw;
            }
            
            fclose($handle);
        }
        
        return $data;
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('get_za_status')) {
    function get_za_status($status) {
        switch ((int)$status) {
            case ZipArchive::ER_OK:
                return 'N No error';
            case ZipArchive::ER_MULTIDISK:
                return 'N Multi-disk zip archives not supported';
            case ZipArchive::ER_RENAME:
                return 'S Renaming temporary file failed';
            case ZipArchive::ER_CLOSE:
                return 'S Closing zip archive failed';
            case ZipArchive::ER_SEEK:
                return 'S Seek error';
            case ZipArchive::ER_READ:
                return 'S Read error';
            case ZipArchive::ER_WRITE:
                return 'S Write error';
            case ZipArchive::ER_CRC:
                return 'N CRC error';
            case ZipArchive::ER_ZIPCLOSED:
                return 'N Containing zip archive was closed';
            case ZipArchive::ER_NOENT:
                return 'N No such file';
            case ZipArchive::ER_EXISTS:
                return 'N File already exists';
            case ZipArchive::ER_OPEN:
                return 'S Can\'t open file';
            case ZipArchive::ER_TMPOPEN:
                return 'S Failure to create temporary file';
            case ZipArchive::ER_ZLIB:
                return 'Z Zlib error';
            case ZipArchive::ER_MEMORY:
                return 'N Malloc failure';
            case ZipArchive::ER_CHANGED:
                return 'N Entry has been changed';
            case ZipArchive::ER_COMPNOTSUPP:
                return 'N Compression method not supported';
            case ZipArchive::ER_EOF:
                return 'N Premature EOF';
            case ZipArchive::ER_INVAL:
                return 'N Invalid argument';
            case ZipArchive::ER_NOZIP:
                return 'N Not a zip archive';
            case ZipArchive::ER_INTERNAL:
                return 'N Internal error';
            case ZipArchive::ER_INCONS:
                return 'N Zip archive inconsistent';
            case ZipArchive::ER_REMOVE:
                return 'S Can\'t remove file';
            case ZipArchive::ER_DELETED:
                return 'N Entry has been deleted';
            default:
                return sprintf('Unknown status %s', $status);
        }
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('fileinfo2')) {
    function fileinfo2($file) {
        $data = array('type' => 'unknown');
        $data['ext'] = pathinfo($file, PATHINFO_EXTENSION);
        
        $image = array('bmp', 'gif', 'jpg', 'jpeg', 'png');
        
        $doc = array('doc', 'pdf', 'csv', 'xls');
        
        $zip = array('zip');
        
        if (in_array($data['ext'], $image)) {
            $data['type'] = 'image';
        } 
        else if (in_array($data['ext'], $doc)) {
            $data['type'] = 'doc';
        } 
        else if (in_array($data['ext'], $zip)) {
            $data['type'] = 'zip';
        }
        
        return $data;
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('unzip_recursive')) {
    function unzip_recursive($file, $dir) {
        $filepath = $dir . '/' . $file;
        $fileinfo = fileinfo2($filepath);
        
        if (!is_file($filepath) || $fileinfo['type'] != 'zip') {
            return;
        }
        
        $zip = new ZipArchive();
        $result = $zip->open($filepath);
        
        if ($result === TRUE) {
            $zip->extractTo($dir);
            $zip->close();
            
            unlink($filepath);
            
            $files = scandir($dir);
            foreach ($files as $val) {
                $subdir = $dir . '/' . $val;
                if (!is_symbolic($val)) {
                    if (is_dir($subdir)) {
                        recurse_copy($subdir, $dir);
                    } 
                    else {
                        unzip_recursive($val, $dir);
                    }
                }
            }
            
            if (count($files) > 2) {
                unzip_recursive($file, $dir);
            }
        } 
        else {
            error_msg(get_za_status($result));
        }
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('striplines')) {
    function striplines($str) {
        return str_replace(array("\n", "\r"), " ", trim($str));
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('outcsv')) {
    function outcsv($filename, $data) {
        header("Content-type: text/csv");
        header("Cache-Control: no-store, no-cache");
        header('Content-Disposition: attachment; filename="' . $filename . '.csv"');
        
        $outstream = fopen("php://output", 'w');
        
        foreach ($data as $key => $value) {
            fputcsv($outstream, $value, ',', '"');
        }
        
        fclose($outstream);
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('iin_array')) {
    function iin_array($needle, $haystack) {
        $data = array();
        foreach ($haystack as $key => $value) {
            $data[$key] = strtolower($value);
        }
        
        return in_array(strtolower($needle), $data);
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('get_week_range')) {
    function get_week_range($date) {
        $date = strtotime($date);
        
        return array('start' => date("Y-m-d", strtotime('sunday last week', $date)), 'end' => date("Y-m-d", strtotime('saturday this week', $date)));
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('is_symbolic')) {
    function is_symbolic($str) {
        return in_array($str, array('.', '..'));
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('recurse_copy')) {
    function recurse_copy($src, $dst) {
        $dir = opendir($src);
        
        while (false !== ($file = readdir($dir))) {
            if (($file != '.') && ($file != '..')) {
                if (is_dir($src . '/' . $file)) {
                    recurse_copy($src . '/' . $file, $dst);
                    rmdir2($src);
                } 
                else {
                    copy($src . '/' . $file, $dst . '/' . $file);
                }
            }
        }
        closedir($dir);
    }
}

// ------------------------------------------------------------------------



/**
 * Trim Slashes
 *
 * Removes any leading/trailing slashes from a string:
 *
 * /this/that/theother/
 *
 * becomes:
 *
 * this/that/theother
 *
 * @access  public
 * @param   string
 * @return  string
 */
if (!function_exists('get_week_period')) {
    function get_week_period($week, $year) {
        $time = strtotime("1 January $year", time());
        $day = date('w', $time);
        $time+= ((7 * $week) - $day) * 24 * 3600;
        $return[0] = date('Y-n-j', $time);
        $time+= 6 * 24 * 3600;
        $return[1] = date('Y-n-j', $time);
        
        return dt_format('M d, Y', $return[0]) . ' - ' . dt_format('M d, Y', $return[1]);
    }
}

if (!function_exists('str_minify')) {
    function str_minify($string) {
        return preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $string);
    }
}

if (!function_exists('getMimeType')) {
    function getMimeType($filename = '') {
        $filename = escapeshellcmd($filename);
        $command = "file -b --mime-type {$filename}";
        $mimeType = shell_exec($command);
        return trim($mimeType);
    }
}

/* End of file string_helper.php */

/* Location: ./system/helpers/string_helper.php */
