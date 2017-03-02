<?php
/**
 * SubmitButtonRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketo Rest API
 *
 * Marketo Rest API
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CollingMedia\Client\Model;

use \ArrayAccess;

/**
 * SubmitButtonRequest Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SubmitButtonRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SubmitButtonRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'button_position' => 'int',
        'button_style' => 'string',
        'label' => 'string',
        'waiting_label' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'button_position' => 'buttonPosition',
        'button_style' => 'buttonStyle',
        'label' => 'label',
        'waiting_label' => 'waitingLabel'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'button_position' => 'setButtonPosition',
        'button_style' => 'setButtonStyle',
        'label' => 'setLabel',
        'waiting_label' => 'setWaitingLabel'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'button_position' => 'getButtonPosition',
        'button_style' => 'getButtonStyle',
        'label' => 'getLabel',
        'waiting_label' => 'getWaitingLabel'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['button_position'] = isset($data['button_position']) ? $data['button_position'] : null;
        $this->container['button_style'] = isset($data['button_style']) ? $data['button_style'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['waiting_label'] = isset($data['waiting_label']) ? $data['waiting_label'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets button_position
     * @return int
     */
    public function getButtonPosition()
    {
        return $this->container['button_position'];
    }

    /**
     * Sets button_position
     * @param int $button_position Location in pixels of the button relative to the left of the form
     * @return $this
     */
    public function setButtonPosition($button_position)
    {
        $this->container['button_position'] = $button_position;

        return $this;
    }

    /**
     * Gets button_style
     * @return string
     */
    public function getButtonStyle()
    {
        return $this->container['button_style'];
    }

    /**
     * Sets button_style
     * @param string $button_style Style of the button
     * @return $this
     */
    public function setButtonStyle($button_style)
    {
        $this->container['button_style'] = $button_style;

        return $this;
    }

    /**
     * Gets label
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     * @param string $label Label text of the button
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets waiting_label
     * @return string
     */
    public function getWaitingLabel()
    {
        return $this->container['waiting_label'];
    }

    /**
     * Sets waiting_label
     * @param string $waiting_label Waiting text of the button
     * @return $this
     */
    public function setWaitingLabel($waiting_label)
    {
        $this->container['waiting_label'] = $waiting_label;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CollingMedia\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CollingMedia\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


