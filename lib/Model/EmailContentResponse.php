<?php
/**
 * EmailContentResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  CollingMedia\Client
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
 * EmailContentResponse Class Doc Comment
 *
 * @category    Class */
/**
 * @package     CollingMedia\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EmailContentResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'EmailContentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'content_type' => 'string',
        'html_id' => 'string',
        'index' => 'int',
        'is_locked' => 'bool',
        'parent_html_id' => 'string',
        'value' => 'object'
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
        'content_type' => 'contentType',
        'html_id' => 'htmlId',
        'index' => 'index',
        'is_locked' => 'isLocked',
        'parent_html_id' => 'parentHtmlId',
        'value' => 'value'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'content_type' => 'setContentType',
        'html_id' => 'setHtmlId',
        'index' => 'setIndex',
        'is_locked' => 'setIsLocked',
        'parent_html_id' => 'setParentHtmlId',
        'value' => 'setValue'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'content_type' => 'getContentType',
        'html_id' => 'getHtmlId',
        'index' => 'getIndex',
        'is_locked' => 'getIsLocked',
        'parent_html_id' => 'getParentHtmlId',
        'value' => 'getValue'
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
        $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
        $this->container['html_id'] = isset($data['html_id']) ? $data['html_id'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['is_locked'] = isset($data['is_locked']) ? $data['is_locked'] : null;
        $this->container['parent_html_id'] = isset($data['parent_html_id']) ? $data['parent_html_id'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['content_type'] === null) {
            $invalid_properties[] = "'content_type' can't be null";
        }
        if ($this->container['html_id'] === null) {
            $invalid_properties[] = "'html_id' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalid_properties[] = "'value' can't be null";
        }
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
        if ($this->container['content_type'] === null) {
            return false;
        }
        if ($this->container['html_id'] === null) {
            return false;
        }
        if ($this->container['value'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets content_type
     * @return string
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     * @param string $content_type Type of content to set for the section.
     * @return $this
     */
    public function setContentType($content_type)
    {
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets html_id
     * @return string
     */
    public function getHtmlId()
    {
        return $this->container['html_id'];
    }

    /**
     * Sets html_id
     * @param string $html_id HTML id of the content section
     * @return $this
     */
    public function setHtmlId($html_id)
    {
        $this->container['html_id'] = $html_id;

        return $this;
    }

    /**
     * Gets index
     * @return int
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     * @param int $index
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets is_locked
     * @return bool
     */
    public function getIsLocked()
    {
        return $this->container['is_locked'];
    }

    /**
     * Sets is_locked
     * @param bool $is_locked
     * @return $this
     */
    public function setIsLocked($is_locked)
    {
        $this->container['is_locked'] = $is_locked;

        return $this;
    }

    /**
     * Gets parent_html_id
     * @return string
     */
    public function getParentHtmlId()
    {
        return $this->container['parent_html_id'];
    }

    /**
     * Sets parent_html_id
     * @param string $parent_html_id
     * @return $this
     */
    public function setParentHtmlId($parent_html_id)
    {
        $this->container['parent_html_id'] = $parent_html_id;

        return $this;
    }

    /**
     * Gets value
     * @return object
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param object $value Contents of the section
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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


