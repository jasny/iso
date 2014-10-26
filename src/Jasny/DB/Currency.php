<?php
/**
 * Jasny Social
 * World's best PHP library for webservice APIs
 *
 * @license http://www.jasny.net/mit MIT
 * @copyright 2012 Jasny
 */

namespace Jasny\DB;
use Jasny\ISO\Data\Countries as Countries;
include_once("Data/Currencies.php");


class Currency {
    function __construct($currency){
        $this->currency     =   Data\Currencies::getCode($currency);
    }
    /**
     * Get list of currencies
     *
     * @return array
     */
    public static function getList()
    {
        return Data\Currencies::getList();
    }

    /**
     * Create new object from currency
     *
     * @param string $currency Currency code, sign or name
     * @return object
     */
    public static function form($currency) {
        $currency = (string)$currency;
        return new Currency($currency);
    }
    /**
     * Get country currencies
     *
     * @param string $country
     * @return string
     */
    public static function forCountry($country)
    {
        return Data\Currencies::forCountry($country);

    }
    /**
     * Get currency code
     *
     * @return string
     */
    public function toCode(){
        return Data\Currencies::getCode($this->currency);
    }

    /**
     * Get currency name
     *
     * @return string
     */
    public function toName(){
        return Data\Currencies::getName($this->currency);
    }
    /**
     * Get currency short name
     *
     * @return string
     */
    public function toShortName(){
        return Data\Currencies::getShortName($this->currency);
    }
    /**
     * Get currency fractal
     *
     * @return string
     */
    public function toFractal(){
        return Data\Currencies::getFractal($this->currency);
    }
    /**
     * Get currency sign
     *
     * @return string
     */
    public function toSign(){
        return Data\Currencies::getSign($this->currency);
    }
    /**
     * Get full info about currency
     *
     * @return string
     */
    public function info(){
        return Data\Currencies::getInfo($this->currency);
    }
    /**
     * Get countries where currency is used
     *
     * @param boolean $codes
     * @return string
     */
    public function forCountries($codes = false){
        return Data\Currencies::getCountry($this->currency, $codes);
    }
}
