<?php

/**
* Smarty method Unregister_Prefilter
* 
* Unregister a prefilter
* 
* @package Smarty
* @subpackage SmartyMethod
* @author Uwe Tews 
*/

/**
* Smarty class Unregister_Prefilter
* 
* Unregister a prefilter
*/

class Smarty_Method_Unregister_Prefilter extends Smarty_Internal_Base {
    /**
    * Unregisters a prefilter function
    * 
    * @param callback $function 
    */
    public function execute($function)
    {
        unset($this->smarty->plugins['prefilter'][$function]);
    } 
} 

?>
