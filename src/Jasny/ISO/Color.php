<?php

namespace Jasny\ISO;
include_once('Data/ColorsData.php');
use Jasny\ISO\Data\ColorsData;

class Color extends ColorsData
{
    function __construct($color, $type = false)
    {
        $this->color = (static::isHex($color) || static::isName($color) || static::isRgb($color)) ? $color : null;
        $this->type = ($type === 'hex' || $type === 'name' || $type === 'rgb') ? $type : null;
    }

    /**
     * Check if $color is hex
     *
     * @param string|array $color
     * @return string
     */
    protected static function isHex($color)
    {
        return (is_string($color) && $color[0] === '#' && (strlen($color) === 4 || strlen($color) === 7)) ? $color : null;
    }

    /**
     * Check if $color is name
     *
     * @param string|array $color
     * @return string
     */
    protected static function isName($color)
    {
        return (is_string($color) && isset(static::$names[$color])) ? $color : null;
    }

    /**
     * Check if $color is rgb
     *
     * @param string|array $color
     * @return array
     */
    protected static function isRgb($color)
    {
        return (is_array($color) && count($color) === 3) ? $color : null;
    }

    /**
     * Create new object from color name
     *
     * @param string $color Color name
     * @return object
     */
    public static function fromName($color)
    {
        if (!is_string($color)) return new Color(null);
        $color = (string)strtolower($color);
        return isset(static::$names[$color]) ? new Color($color, "name") : new Color(null);
    }

    /**
     * Create new object from color rgb
     *
     * @param array $color Color rgb
     * @return object
     */
    public static function fromRGB($color)
    {
        return (is_array($color) && count($color) === 3) ? new Color($color, "rgb") : new Color(null);
    }

    /**
     * Create new object from color hex
     *
     * @param string $color Color hex
     * @return object
     */
    public static function fromHex($color)
    {
        if (!is_string($color)) return new Color(null);
        $color = (string)strtolower($color);
        return ($color[0] === '#' && (strlen($color) === 4 || strlen($color) === 7)) ? new Color($color, "hex") : new Color(null);
    }

    /**
     * Create new object from color hex, rgb or name
     *
     * @param string|array $color Color hex, rgb or name
     * @return object
     */
    public static function from($color)
    {
        if (is_array($color) && count($color) === 3) {
            return static::fromRGB($color);
        } elseif ($color[0] === '#') {
            return static::fromHex($color);
        } else {
            return static::fromName($color);
        }
    }

    /**
     * Converts color to hex
     *
     * @return string
     */
    public function toHex()
    {
        return static::getHex($this->color);
    }

    /**
     * Converts color to rgb
     *
     * @return string
     */
    public function toRGB()
    {
        return static::getRgb($this->color);
    }

    /**
     * Converts color to name
     *
     * @return string
     */
    public function toName()
    {
        return static::getName($this->color);
    }


}