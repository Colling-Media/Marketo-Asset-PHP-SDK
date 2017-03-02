<?php
/**
 * TagResponseGetAll
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
 * TagResponseGetAll Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TagResponseGetAll implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TagResponseGetAll';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'applicable_program_types' => 'string',
        'required' => 'bool',
        'tag_type' => 'string'
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
        'applicable_program_types' => 'applicableProgramTypes',
        'required' => 'required',
        'tag_type' => 'tagType'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'applicable_program_types' => 'setApplicableProgramTypes',
        'required' => 'setRequired',
        'tag_type' => 'setTagType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'applicable_program_types' => 'getApplicableProgramTypes',
        'required' => 'getRequired',
        'tag_type' => 'getTagType'
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
        $this->container['applicable_program_types'] = isset($data['applicable_program_types']) ? $data['applicable_program_types'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['tag_type'] = isset($data['tag_type']) ? $data['tag_type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['applicable_program_types'] === null) {
            $invalid_properties[] = "'applicable_program_types' can't be null";
        }
        if ($this->container['required'] === null) {
            $invalid_properties[] = "'required' can't be null";
        }
        if ($this->container['tag_type'] === null) {
            $invalid_properties[] = "'tag_type' can't be null";
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
        if ($this->container['applicable_program_types'] === null) {
            return false;
        }
        if ($this->container['required'] === null) {
            return false;
        }
        if ($this->container['tag_type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets applicable_program_types
     * @return string
     */
    public function getApplicableProgramTypes()
    {
        return $this->container['applicable_program_types'];
    }

    /**
     * Sets applicable_program_types
     * @param string $applicable_program_types Types of programs to which the tag can apply
     * @return $this
     */
    public function setApplicableProgramTypes($applicable_program_types)
    {
        $this->container['applicable_program_types'] = $applicable_program_types;

        return $this;
    }

    /**
     * Gets required
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     * @param bool $required Whether the tag is required for its applicable program types
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets tag_type
     * @return string
     */
    public function getTagType()
    {
        return $this->container['tag_type'];
    }

    /**
     * Sets tag_type
     * @param string $tag_type Name of the tag
     * @return $this
     */
    public function setTagType($tag_type)
    {
        $this->container['tag_type'] = $tag_type;

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


