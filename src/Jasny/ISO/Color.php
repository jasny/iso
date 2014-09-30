<?php

namespace Jasny\ISO;
include_once('Data/Colors.php');
class Color
{
    function __construct($color, $type = false)
    {
        $this->type = $type;

        if (static::isValid($color)) {
            if ($this->type === "hex") {
                $this->color = Colors::getHex($color);
            } elseif ($this->type === "rgb") {
                $this->color = Colors::getRgb($color);
            } elseif ($this->type === "name") {
                $this->color = Colors::getName($color);
            } else {
                $this->color = $color;
            }
        } else {
            throw new \Exception('Wrong argument!');
        }
    }

    /**
     * Get list of colors
     *
     * @return array
     */
    public static function getList()
    {
        return Colors::getList();
    }

    /**
     * Create new object from color hex
     *
     * @param array $color Color hex
     * @return object
     */
    final public static function fromHex($color)
    {
        return new Color($color, "hex");
    }

    /**
     * Create new object from color rgb
     *
     * @param array $color Color rgb
     * @return object
     */
    final public static function fromRGB($color)
    {
        return new Color($color, "rgb");
    }

    /**
     * Create new object from color name
     *
     * @param array $color Color name
     * @return object
     */
    final public static function fromName($color)
    {
        return new Color($color, "name");
    }

    /**
     * Create new object from color hex, rgb or name
     *
     * @param string|array $color Color hex, rgb or name
     * @return object
     */
    final public static function from($color)
    {
        return new Color($color);
    }

    /**
     * Check if $color is valid (rgb, name or hex)
     *
     * @param string|array $color
     * @return boolean
     */
    protected static function isValid($color)
    {
        return static::isHex($color) || static::isName($color) || static::isRgb($color);
    }

    /**
     * Check if $color is hex
     *
     * @param string|array $color
     * @return string
     */
    protected static function isHex($color)
    {
        return (is_string($color) && preg_match('/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/',$color)) ? : null;
    }

    /**
     * Check if $color is name
     *
     * @param string|array $color
     * @return string
     */
    protected static function isName($color)
    {
        return (is_string($color) && isset(Color::getList()[$color])) ? : null;
    }

    /**
     * Check if $color is rgb
     *
     * @param string|array $color
     * @return array
     */
    protected static function isRgb($color)
    {
        return (is_array($color) && count($color) === 3) ? : null;
    }

    /**
     * Converts color to hex
     *
     * @return string
     */
    public function toHex()
    {
        return Colors::getHex($this->color);
    }

    /**
     * Converts color to rgb
     *
     * @return string
     */
    public function toRGB()
    {
        return Colors::getRgb($this->color);
    }

    /**
     * Converts color to name
     *
     * @return string
     */
    public function toName()
    {
        return Colors::getName($this->color);
    }


}
