<?php
/**
 * BrowseAllPrograms
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
 * BrowseAllPrograms Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BrowseAllPrograms implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BrowseAllPrograms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'channel' => 'string',
        'created_at' => '\DateTime',
        'description' => 'string',
        'folder' => '\CollingMedia\Client\Model\Folder',
        'id' => 'int',
        'name' => 'string',
        'sfdc_id' => 'string',
        'sfdc_name' => 'string',
        'status' => 'string',
        'type' => 'string',
        'updated_at' => '\DateTime',
        'url' => 'string',
        'workspace' => 'string'
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
        'channel' => 'channel',
        'created_at' => 'createdAt',
        'description' => 'description',
        'folder' => 'folder',
        'id' => 'id',
        'name' => 'name',
        'sfdc_id' => 'sfdcId',
        'sfdc_name' => 'sfdcName',
        'status' => 'status',
        'type' => 'type',
        'updated_at' => 'updatedAt',
        'url' => 'url',
        'workspace' => 'workspace'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'channel' => 'setChannel',
        'created_at' => 'setCreatedAt',
        'description' => 'setDescription',
        'folder' => 'setFolder',
        'id' => 'setId',
        'name' => 'setName',
        'sfdc_id' => 'setSfdcId',
        'sfdc_name' => 'setSfdcName',
        'status' => 'setStatus',
        'type' => 'setType',
        'updated_at' => 'setUpdatedAt',
        'url' => 'setUrl',
        'workspace' => 'setWorkspace'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'channel' => 'getChannel',
        'created_at' => 'getCreatedAt',
        'description' => 'getDescription',
        'folder' => 'getFolder',
        'id' => 'getId',
        'name' => 'getName',
        'sfdc_id' => 'getSfdcId',
        'sfdc_name' => 'getSfdcName',
        'status' => 'getStatus',
        'type' => 'getType',
        'updated_at' => 'getUpdatedAt',
        'url' => 'getUrl',
        'workspace' => 'getWorkspace'
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

    const STATUS_LOCKED = 'locked';
    const STATUS_UNLOCKED = 'unlocked';
    const STATUS_ON = 'on';
    const STATUS_OFF = 'off';
    const TYPE_PROGRAM = 'program';
    const TYPE_EVENT = 'event';
    const TYPE_WEBINAR = 'webinar';
    const TYPE_NURTURE = 'nurture';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_LOCKED,
            self::STATUS_UNLOCKED,
            self::STATUS_ON,
            self::STATUS_OFF,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PROGRAM,
            self::TYPE_EVENT,
            self::TYPE_WEBINAR,
            self::TYPE_NURTURE,
        ];
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
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['folder'] = isset($data['folder']) ? $data['folder'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sfdc_id'] = isset($data['sfdc_id']) ? $data['sfdc_id'] : null;
        $this->container['sfdc_name'] = isset($data['sfdc_name']) ? $data['sfdc_name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['channel'] === null) {
            $invalid_properties[] = "'channel' can't be null";
        }
        if ($this->container['folder'] === null) {
            $invalid_properties[] = "'folder' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        $allowed_values = ["locked", "unlocked", "on", "off"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
        }

        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        $allowed_values = ["program", "event", "webinar", "nurture"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
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
        if ($this->container['channel'] === null) {
            return false;
        }
        if ($this->container['folder'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowed_values = ["locked", "unlocked", "on", "off"];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = ["program", "event", "webinar", "nurture"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets channel
     * @return string
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     * @param string $channel Channel of the program
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets created_at
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param \DateTime $created_at Datetime the asset was created
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Description of the asset
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets folder
     * @return \CollingMedia\Client\Model\Folder
     */
    public function getFolder()
    {
        return $this->container['folder'];
    }

    /**
     * Sets folder
     * @param \CollingMedia\Client\Model\Folder $folder JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
     * @return $this
     */
    public function setFolder($folder)
    {
        $this->container['folder'] = $folder;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Id of the asset
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name of the asset
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets sfdc_id
     * @return string
     */
    public function getSfdcId()
    {
        return $this->container['sfdc_id'];
    }

    /**
     * Sets sfdc_id
     * @param string $sfdc_id SFDC id of the program if linked to an SFDC campaign
     * @return $this
     */
    public function setSfdcId($sfdc_id)
    {
        $this->container['sfdc_id'] = $sfdc_id;

        return $this;
    }

    /**
     * Gets sfdc_name
     * @return string
     */
    public function getSfdcName()
    {
        return $this->container['sfdc_name'];
    }

    /**
     * Sets sfdc_name
     * @param string $sfdc_name Name of the linked SFDC campaign if applicable
     * @return $this
     */
    public function setSfdcName($sfdc_name)
    {
        $this->container['sfdc_name'] = $sfdc_name;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status of the program.  Only valid for Email and engagement program types.
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('locked', 'unlocked', 'on', 'off');
        if ((!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'locked', 'unlocked', 'on', 'off'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Type of the program
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('program', 'event', 'webinar', 'nurture');
        if ((!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'program', 'event', 'webinar', 'nurture'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets updated_at
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param \DateTime $updated_at Datetime the asset was most recently updated
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url Url of the asset in the Marketo UI
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets workspace
     * @return string
     */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
     * Sets workspace
     * @param string $workspace Name of the workspace
     * @return $this
     */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;

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


