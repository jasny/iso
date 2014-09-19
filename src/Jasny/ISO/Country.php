<?php
/**
 * Jasny Social
 * World's best PHP library for webservice APIs
 *
 * @license http://www.jasny.net/mit MIT
 * @copyright 2012 Jasny
 */

/** */
namespace Jasny\ISO;
include_once("Data/Countries/En.php");
use Jasny\ISO\Data\Countries\En;

/**
 * ISO 3166-1
 *
 * ISO 3166 is the International Standard for country codes and codes for their subdivisions. The purpose of ISO 3166 is
 *  to establish internationally recognised codes for the representation of names of countries, territories or areas of
 *  geographical interest, and their subdivisions.
 */
class Country extends En
{
    function __construct($country, $param = false)
    {
        $this->country = (string)$country;
        $this->param = $param;
        if ($param == "code") $this->country = (strlen($country) == 2) ? $country : null;
        if ($param == "name") $this->country = isset(static::$list[$country]) ? $country : null;
    }

    /**
     * Create new object from country name
     *
     * @param string $country Country name
     * @return object
     */
    public static function fromName($country)
    {
        $country = (string)$country;
        return isset(static::$list[$country]) ? new Country($country, "name") : new Country(null);
    }

    /**
     * Create new object from country code
     *
     * @param string $country Country code
     * @return object
     */
    public static function fromCode($country)
    {
        $country = (string)$country;
        return (strlen($country) == 2) ? new Country($country, "code") : new Country(null);
    }

    /**
     * Checking what input is
     *
     * @param string $country Country code or name
     * @return static function
     */
    public static function from($country)
    {
        $country = (string)$country;
        return (strlen($country) != 2) ? static::fromName($country) : static::fromCode($country);
    }

    /**
     * Get country code
     *
     * @return string
     */
    public function toCode()
    {
        if (strlen($this->country) != 2) $this->country = static::getCode($this->country);
        return $this->country;
    }

    /**
     * Get country name
     *
     * @return string
     */
    public function  toName()
    {
        return array_search(static::countryCode($this->country), static::$list) ? : null;
    }

}
