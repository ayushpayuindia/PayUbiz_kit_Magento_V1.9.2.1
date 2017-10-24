<?php
/**
 *
 * @author     Payubiz
 * @copyright  2011-2017 PayU India
 * @license    http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link       http://www.payu.in
 * @category   PayUbiz
 * @package    PayUbiz
 */

class PayUbiz_PayUbiz_Model_Source_Pg
{
    public function toOptionArray()
    {

     return array(
     		array('value' => '', 'label' => 'PayU Biz'),
            array('value' => 'CC', 'label' => 'Credit Card'),
            array('value' => 'DC', 'label' => 'Debit Card'),
            array('value' => 'NB', 'label' => 'NetBanking'),
            array('value' => 'wallet', 'label' => 'PayUMoney'), 
        );
    }
}
