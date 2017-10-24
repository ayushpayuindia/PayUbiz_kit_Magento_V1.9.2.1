<?php
/**
 * Form.php
 *
 * @author     Payubiz
 * @copyright  2011-2017 PayU India
 * @license    http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link       http://www.payu.in
 * @category   PayUbiz
 * @package    PayUbiz
 */

/**
 * PayUbiz_Block_Form 
 */
class PayUbiz_PayUbiz_Block_Form extends Mage_Payment_Block_Form
{
    // {{{ _construct()
    /**
     * _construct() 
     */    
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate( 'payubiz/form.phtml' );
    }
    // }}}
}
