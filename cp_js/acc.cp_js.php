<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Thotbox: Control Panel JavaScript
 *
 * @package     Thotbox: Control Panel JavaScript
 * @category    Accessory
 * @description Custom JS in the Control Panel
 * @author      Shane Woodward
 * @link        http://thotbox.ca
 */


class Cp_js_acc
{
    var $name = 'Control Panel JavaScript';
    var $id = 'cp_js';
    var $version = '1.0';
    var $description = 'Custom JS in the Control Panel';
    var $sections = array();

    function __construct() {
        $this->EE =& get_instance();
    }

    function set_sections() {
        ee()->cp->load_package_js('cp_js');
    }

}

/* End of file acc.cp_js.php */
/* Location: ./system/expressionengine/third_party/cp_js/acc.cp_js.php */