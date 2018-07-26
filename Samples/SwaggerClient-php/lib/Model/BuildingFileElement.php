<?php
/**
 * BuildingFileElement
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Madaster Private API
 *
 * The Madaster Private API endpoint.
 *
 * OpenAPI spec version: 1.1
 * Contact: service@madaster.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * BuildingFileElement Class Doc Comment
 *
 * @category Class
 * @description A building file element
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BuildingFileElement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BuildingFileElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'building_file_id' => 'string',
        'material_name' => 'string',
        'type_name' => 'string',
        'element_class' => 'string',
        'volume' => 'double',
        'area' => 'double',
        'height' => 'double',
        'width' => 'double',
        'length' => 'double',
        'weight' => 'double',
        'mapping' => '\Swagger\Client\Model\Mapping',
        'phase' => '\Swagger\Client\Model\Phase',
        'brand_layer' => '\Swagger\Client\Model\BrandLayer',
        'classification' => '\Swagger\Client\Model\Classification',
        'floor' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'building_file_id' => 'uuid',
        'material_name' => null,
        'type_name' => null,
        'element_class' => null,
        'volume' => 'double',
        'area' => 'double',
        'height' => 'double',
        'width' => 'double',
        'length' => 'double',
        'weight' => 'double',
        'mapping' => null,
        'phase' => null,
        'brand_layer' => null,
        'classification' => null,
        'floor' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'building_file_id' => 'buildingFileId',
        'material_name' => 'materialName',
        'type_name' => 'typeName',
        'element_class' => 'elementClass',
        'volume' => 'volume',
        'area' => 'area',
        'height' => 'height',
        'width' => 'width',
        'length' => 'length',
        'weight' => 'weight',
        'mapping' => 'mapping',
        'phase' => 'phase',
        'brand_layer' => 'brandLayer',
        'classification' => 'classification',
        'floor' => 'floor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'building_file_id' => 'setBuildingFileId',
        'material_name' => 'setMaterialName',
        'type_name' => 'setTypeName',
        'element_class' => 'setElementClass',
        'volume' => 'setVolume',
        'area' => 'setArea',
        'height' => 'setHeight',
        'width' => 'setWidth',
        'length' => 'setLength',
        'weight' => 'setWeight',
        'mapping' => 'setMapping',
        'phase' => 'setPhase',
        'brand_layer' => 'setBrandLayer',
        'classification' => 'setClassification',
        'floor' => 'setFloor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'building_file_id' => 'getBuildingFileId',
        'material_name' => 'getMaterialName',
        'type_name' => 'getTypeName',
        'element_class' => 'getElementClass',
        'volume' => 'getVolume',
        'area' => 'getArea',
        'height' => 'getHeight',
        'width' => 'getWidth',
        'length' => 'getLength',
        'weight' => 'getWeight',
        'mapping' => 'getMapping',
        'phase' => 'getPhase',
        'brand_layer' => 'getBrandLayer',
        'classification' => 'getClassification',
        'floor' => 'getFloor'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['building_file_id'] = isset($data['building_file_id']) ? $data['building_file_id'] : null;
        $this->container['material_name'] = isset($data['material_name']) ? $data['material_name'] : null;
        $this->container['type_name'] = isset($data['type_name']) ? $data['type_name'] : null;
        $this->container['element_class'] = isset($data['element_class']) ? $data['element_class'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['mapping'] = isset($data['mapping']) ? $data['mapping'] : null;
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['brand_layer'] = isset($data['brand_layer']) ? $data['brand_layer'] : null;
        $this->container['classification'] = isset($data['classification']) ? $data['classification'] : null;
        $this->container['floor'] = isset($data['floor']) ? $data['floor'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The identifier of the element
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets building_file_id
     *
     * @return string
     */
    public function getBuildingFileId()
    {
        return $this->container['building_file_id'];
    }

    /**
     * Sets building_file_id
     *
     * @param string $building_file_id The identifier of the building file that this building file element belongs to.
     *
     * @return $this
     */
    public function setBuildingFileId($building_file_id)
    {
        $this->container['building_file_id'] = $building_file_id;

        return $this;
    }

    /**
     * Gets material_name
     *
     * @return string
     */
    public function getMaterialName()
    {
        return $this->container['material_name'];
    }

    /**
     * Sets material_name
     *
     * @param string $material_name The name of the element
     *
     * @return $this
     */
    public function setMaterialName($material_name)
    {
        $this->container['material_name'] = $material_name;

        return $this;
    }

    /**
     * Gets type_name
     *
     * @return string
     */
    public function getTypeName()
    {
        return $this->container['type_name'];
    }

    /**
     * Sets type_name
     *
     * @param string $type_name The type name of the element
     *
     * @return $this
     */
    public function setTypeName($type_name)
    {
        $this->container['type_name'] = $type_name;

        return $this;
    }

    /**
     * Gets element_class
     *
     * @return string
     */
    public function getElementClass()
    {
        return $this->container['element_class'];
    }

    /**
     * Sets element_class
     *
     * @param string $element_class The element class of the element
     *
     * @return $this
     */
    public function setElementClass($element_class)
    {
        $this->container['element_class'] = $element_class;

        return $this;
    }

    /**
     * Gets volume
     *
     * @return double
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     *
     * @param double $volume The volume of the element
     *
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;

        return $this;
    }

    /**
     * Gets area
     *
     * @return double
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area
     *
     * @param double $area The area of the element
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->container['area'] = $area;

        return $this;
    }

    /**
     * Gets height
     *
     * @return double
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param double $height The height of the element
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets width
     *
     * @return double
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param double $width The width of the element
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets length
     *
     * @return double
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param double $length The length of the element
     *
     * @return $this
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return double
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param double $weight The weight of the element
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets mapping
     *
     * @return \Swagger\Client\Model\Mapping
     */
    public function getMapping()
    {
        return $this->container['mapping'];
    }

    /**
     * Sets mapping
     *
     * @param \Swagger\Client\Model\Mapping $mapping The mapping of the element
     *
     * @return $this
     */
    public function setMapping($mapping)
    {
        $this->container['mapping'] = $mapping;

        return $this;
    }

    /**
     * Gets phase
     *
     * @return \Swagger\Client\Model\Phase
     */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
     * Sets phase
     *
     * @param \Swagger\Client\Model\Phase $phase The building process phase of the element
     *
     * @return $this
     */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;

        return $this;
    }

    /**
     * Gets brand_layer
     *
     * @return \Swagger\Client\Model\BrandLayer
     */
    public function getBrandLayer()
    {
        return $this->container['brand_layer'];
    }

    /**
     * Sets brand_layer
     *
     * @param \Swagger\Client\Model\BrandLayer $brand_layer The brandlayer of the element
     *
     * @return $this
     */
    public function setBrandLayer($brand_layer)
    {
        $this->container['brand_layer'] = $brand_layer;

        return $this;
    }

    /**
     * Gets classification
     *
     * @return \Swagger\Client\Model\Classification
     */
    public function getClassification()
    {
        return $this->container['classification'];
    }

    /**
     * Sets classification
     *
     * @param \Swagger\Client\Model\Classification $classification The classification of the element
     *
     * @return $this
     */
    public function setClassification($classification)
    {
        $this->container['classification'] = $classification;

        return $this;
    }

    /**
     * Gets floor
     *
     * @return string
     */
    public function getFloor()
    {
        return $this->container['floor'];
    }

    /**
     * Sets floor
     *
     * @param string $floor The floor of the element
     *
     * @return $this
     */
    public function setFloor($floor)
    {
        $this->container['floor'] = $floor;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


