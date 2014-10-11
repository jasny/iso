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
include_once("Data/Countries/Native.php");


/**
 * ISO 3166-1
 *
 * ISO 3166 is the International Standard for country codes and codes for their subdivisions. The purpose of ISO 3166 is
 *  to establish internationally recognised codes for the representation of names of countries, territories or areas of
 *  geographical interest, and their subdivisions.
 */
class Country
{
    function __construct($country, $param = null, $language = null)
    {
        $this->country = (string)$country;
        $this->param = $param;
        $this->language = $language;
        if (strtolower($this->param) === "name") {
            $this->country = (strtolower($this->language) === "native") ? Data\Countries\Native::getName(static::countryCode($country)) : Data\Countries\En::getName(static::countryCode($country));
        }
        if (strtolower($this->param) === 'code') {
            $this->country = static::countryCode($country, $language);
        }
    }

    /**
     * Get country code
     *
     * @param string $country
     * @param string $language
     * @throws \Exception
     * @return string
     */
    protected function countryCode($country, $language = null)
    {
        $country = (string)$country;
        if (isset(Data\Countries\En::getList()[$country]) || isset(Data\Countries\Native::getList()[$country])) return $country;
        if (strtolower($language) === "native") return Data\Countries\Native::getCode($country);
        if (strtolower($language) === "en") return Data\Countries\En::getCode($country);
        if ($language === null) {
            return (Data\Countries\En::getCode($country)) ? : Data\Countries\Native::getCode($country);
        } else throw new \Exception("There is a mistake in '$language', language parameter can be only En or Native");

    }

    /**
     * List of countries names
     *
     * @param string $language
     * @throws \Exception
     * @return
     */
    public static function getList($language = "en")
    {
        if (strtolower($language) === "en" || strtolower($language) === "native") {
            $namespace = __NAMESPACE__ . "\\Data\\Countries\\" . $language;
            return $namespace::getList();
        } else throw new \Exception("Method 'getList()' can take only two parameters - En or Native!");

    }

    /**
     * Create new object from country name
     *
     * @param string $country Country name
     * @param string $language
     * @return object
     */
    public static function fromName($country, $language = null)
    {
        $country = (string)$country;
        return new Country($country, "name", $language);
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
        return new Country($country, "code");
    }

    /**
     * Create new object from country code or name
     *
     * @param string $country Country code or name
     * @param string $language
     * @return static function
     */
    public static function from($country, $language = null)
    {
        $country = (string)$country;
        return new Country($country, null, $language);
    }

    /**
     * Get country code
     *
     * @throws \Exception
     * @return string
     */
    public function toCode()
    {
        if (strtolower($this->language) === "native") return Data\Countries\Native::getCode($this->country);
        if (strtolower($this->language) === "en") return Data\Countries\En::getCode($this->country);
        if ($this->language === null) {
            return (Data\Countries\En::getCode($this->country)) ? : Data\Countries\Native::getCode($this->country);
        } else throw new \Exception("There is a mistake in '$this->language', language parameter can be only En or Native");

    }

    /**
     * Get country name
     *
     * @param $language
     * @throws \Exception
     * @return string
     */
    public function  toName($language = 'en')
    {
        if (strtolower($language) === "en" || strtolower($language) === "native") {
            $namespace = __NAMESPACE__ . "\\Data\\Countries\\" . $language;
            return $namespace::getName(static::countryCode($this->country));
        } else throw new \Exception("There is a mistake in '$language', language parameter can be only En or Native");

    }

}
