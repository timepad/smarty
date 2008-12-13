<?php

/**
* Smarty method Register_Postfilter
* 
* Registers a PHP function as postfilter
* 
* @package Smarty
* @subpackage SmartyMethod
* @author Uwe Tews 
*/

/**
* Smarty class Register_Postfilter
* 
* Register a PHP function as postfilter
*/

class Smarty_Method_Register_Postfilter extends Smarty_Internal_Base {
    /**
    * Registers a postfilter function to apply
    * to a compiled template after compilation
    * 
    * @param callback $function 
    */
    public function execute($function)
    {
        $this->smarty->plugins['postfilter'][$function] = array($function, null, null, false);
    } 
} 
?>
