<?php
/**
 * BuildingFileValidation
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
 * BuildingFileValidation Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BuildingFileValidation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BuildingFileValidation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'percentage_classification_assigned_by_number' => 'double',
        'percentage_classification_assigned_by_volume' => 'double',
        'percentage_volume_base_quantity_assigned_by_number' => 'double',
        'percentage_area_base_quantity_assigned_by_number' => 'double',
        'percentage_length_base_quantity_assigned_by_number' => 'double',
        'percentage_base_quantities_assigned_by_number' => 'double',
        'percentage_material_specified_by_number' => 'double',
        'percentage_material_specified_by_volume' => 'double',
        'percentage_elements_with_known_mass_by_number' => 'double',
        'percentage_elements_mapped_by_number' => 'double',
        'percentage_elements_mapped_by_volume' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'percentage_classification_assigned_by_number' => 'double',
        'percentage_classification_assigned_by_volume' => 'double',
        'percentage_volume_base_quantity_assigned_by_number' => 'double',
        'percentage_area_base_quantity_assigned_by_number' => 'double',
        'percentage_length_base_quantity_assigned_by_number' => 'double',
        'percentage_base_quantities_assigned_by_number' => 'double',
        'percentage_material_specified_by_number' => 'double',
        'percentage_material_specified_by_volume' => 'double',
        'percentage_elements_with_known_mass_by_number' => 'double',
        'percentage_elements_mapped_by_number' => 'double',
        'percentage_elements_mapped_by_volume' => 'double'
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
        'percentage_classification_assigned_by_number' => 'percentageClassificationAssignedByNumber',
        'percentage_classification_assigned_by_volume' => 'percentageClassificationAssignedByVolume',
        'percentage_volume_base_quantity_assigned_by_number' => 'percentageVolumeBaseQuantityAssignedByNumber',
        'percentage_area_base_quantity_assigned_by_number' => 'percentageAreaBaseQuantityAssignedByNumber',
        'percentage_length_base_quantity_assigned_by_number' => 'percentageLengthBaseQuantityAssignedByNumber',
        'percentage_base_quantities_assigned_by_number' => 'percentageBaseQuantitiesAssignedByNumber',
        'percentage_material_specified_by_number' => 'percentageMaterialSpecifiedByNumber',
        'percentage_material_specified_by_volume' => 'percentageMaterialSpecifiedByVolume',
        'percentage_elements_with_known_mass_by_number' => 'percentageElementsWithKnownMassByNumber',
        'percentage_elements_mapped_by_number' => 'percentageElementsMappedByNumber',
        'percentage_elements_mapped_by_volume' => 'percentageElementsMappedByVolume'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'percentage_classification_assigned_by_number' => 'setPercentageClassificationAssignedByNumber',
        'percentage_classification_assigned_by_volume' => 'setPercentageClassificationAssignedByVolume',
        'percentage_volume_base_quantity_assigned_by_number' => 'setPercentageVolumeBaseQuantityAssignedByNumber',
        'percentage_area_base_quantity_assigned_by_number' => 'setPercentageAreaBaseQuantityAssignedByNumber',
        'percentage_length_base_quantity_assigned_by_number' => 'setPercentageLengthBaseQuantityAssignedByNumber',
        'percentage_base_quantities_assigned_by_number' => 'setPercentageBaseQuantitiesAssignedByNumber',
        'percentage_material_specified_by_number' => 'setPercentageMaterialSpecifiedByNumber',
        'percentage_material_specified_by_volume' => 'setPercentageMaterialSpecifiedByVolume',
        'percentage_elements_with_known_mass_by_number' => 'setPercentageElementsWithKnownMassByNumber',
        'percentage_elements_mapped_by_number' => 'setPercentageElementsMappedByNumber',
        'percentage_elements_mapped_by_volume' => 'setPercentageElementsMappedByVolume'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'percentage_classification_assigned_by_number' => 'getPercentageClassificationAssignedByNumber',
        'percentage_classification_assigned_by_volume' => 'getPercentageClassificationAssignedByVolume',
        'percentage_volume_base_quantity_assigned_by_number' => 'getPercentageVolumeBaseQuantityAssignedByNumber',
        'percentage_area_base_quantity_assigned_by_number' => 'getPercentageAreaBaseQuantityAssignedByNumber',
        'percentage_length_base_quantity_assigned_by_number' => 'getPercentageLengthBaseQuantityAssignedByNumber',
        'percentage_base_quantities_assigned_by_number' => 'getPercentageBaseQuantitiesAssignedByNumber',
        'percentage_material_specified_by_number' => 'getPercentageMaterialSpecifiedByNumber',
        'percentage_material_specified_by_volume' => 'getPercentageMaterialSpecifiedByVolume',
        'percentage_elements_with_known_mass_by_number' => 'getPercentageElementsWithKnownMassByNumber',
        'percentage_elements_mapped_by_number' => 'getPercentageElementsMappedByNumber',
        'percentage_elements_mapped_by_volume' => 'getPercentageElementsMappedByVolume'
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
        $this->container['percentage_classification_assigned_by_number'] = isset($data['percentage_classification_assigned_by_number']) ? $data['percentage_classification_assigned_by_number'] : null;
        $this->container['percentage_classification_assigned_by_volume'] = isset($data['percentage_classification_assigned_by_volume']) ? $data['percentage_classification_assigned_by_volume'] : null;
        $this->container['percentage_volume_base_quantity_assigned_by_number'] = isset($data['percentage_volume_base_quantity_assigned_by_number']) ? $data['percentage_volume_base_quantity_assigned_by_number'] : null;
        $this->container['percentage_area_base_quantity_assigned_by_number'] = isset($data['percentage_area_base_quantity_assigned_by_number']) ? $data['percentage_area_base_quantity_assigned_by_number'] : null;
        $this->container['percentage_length_base_quantity_assigned_by_number'] = isset($data['percentage_length_base_quantity_assigned_by_number']) ? $data['percentage_length_base_quantity_assigned_by_number'] : null;
        $this->container['percentage_base_quantities_assigned_by_number'] = isset($data['percentage_base_quantities_assigned_by_number']) ? $data['percentage_base_quantities_assigned_by_number'] : null;
        $this->container['percentage_material_specified_by_number'] = isset($data['percentage_material_specified_by_number']) ? $data['percentage_material_specified_by_number'] : null;
        $this->container['percentage_material_specified_by_volume'] = isset($data['percentage_material_specified_by_volume']) ? $data['percentage_material_specified_by_volume'] : null;
        $this->container['percentage_elements_with_known_mass_by_number'] = isset($data['percentage_elements_with_known_mass_by_number']) ? $data['percentage_elements_with_known_mass_by_number'] : null;
        $this->container['percentage_elements_mapped_by_number'] = isset($data['percentage_elements_mapped_by_number']) ? $data['percentage_elements_mapped_by_number'] : null;
        $this->container['percentage_elements_mapped_by_volume'] = isset($data['percentage_elements_mapped_by_volume']) ? $data['percentage_elements_mapped_by_volume'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets percentage_classification_assigned_by_number
     *
     * @return double
     */
    public function getPercentageClassificationAssignedByNumber()
    {
        return $this->container['percentage_classification_assigned_by_number'];
    }

    /**
     * Sets percentage_classification_assigned_by_number
     *
     * @param double $percentage_classification_assigned_by_number percentage_classification_assigned_by_number
     *
     * @return $this
     */
    public function setPercentageClassificationAssignedByNumber($percentage_classification_assigned_by_number)
    {
        $this->container['percentage_classification_assigned_by_number'] = $percentage_classification_assigned_by_number;

        return $this;
    }

    /**
     * Gets percentage_classification_assigned_by_volume
     *
     * @return double
     */
    public function getPercentageClassificationAssignedByVolume()
    {
        return $this->container['percentage_classification_assigned_by_volume'];
    }

    /**
     * Sets percentage_classification_assigned_by_volume
     *
     * @param double $percentage_classification_assigned_by_volume percentage_classification_assigned_by_volume
     *
     * @return $this
     */
    public function setPercentageClassificationAssignedByVolume($percentage_classification_assigned_by_volume)
    {
        $this->container['percentage_classification_assigned_by_volume'] = $percentage_classification_assigned_by_volume;

        return $this;
    }

    /**
     * Gets percentage_volume_base_quantity_assigned_by_number
     *
     * @return double
     */
    public function getPercentageVolumeBaseQuantityAssignedByNumber()
    {
        return $this->container['percentage_volume_base_quantity_assigned_by_number'];
    }

    /**
     * Sets percentage_volume_base_quantity_assigned_by_number
     *
     * @param double $percentage_volume_base_quantity_assigned_by_number percentage_volume_base_quantity_assigned_by_number
     *
     * @return $this
     */
    public function setPercentageVolumeBaseQuantityAssignedByNumber($percentage_volume_base_quantity_assigned_by_number)
    {
        $this->container['percentage_volume_base_quantity_assigned_by_number'] = $percentage_volume_base_quantity_assigned_by_number;

        return $this;
    }

    /**
     * Gets percentage_area_base_quantity_assigned_by_number
     *
     * @return double
     */
    public function getPercentageAreaBaseQuantityAssignedByNumber()
    {
        return $this->container['percentage_area_base_quantity_assigned_by_number'];
    }

    /**
     * Sets percentage_area_base_quantity_assigned_by_number
     *
     * @param double $percentage_area_base_quantity_assigned_by_number percentage_area_base_quantity_assigned_by_number
     *
     * @return $this
     */
    public function setPercentageAreaBaseQuantityAssignedByNumber($percentage_area_base_quantity_assigned_by_number)
    {
        $this->container['percentage_area_base_quantity_assigned_by_number'] = $percentage_area_base_quantity_assigned_by_number;

        return $this;
    }

    /**
     * Gets percentage_length_base_quantity_assigned_by_number
     *
     * @return double
     */
    public function getPercentageLengthBaseQuantityAssignedByNumber()
    {
        return $this->container['percentage_length_base_quantity_assigned_by_number'];
    }

    /**
     * Sets percentage_length_base_quantity_assigned_by_number
     *
     * @param double $percentage_length_base_quantity_assigned_by_number percentage_length_base_quantity_assigned_by_number
     *
     * @return $this
     */
    public function setPercentageLengthBaseQuantityAssignedByNumber($percentage_length_base_quantity_assigned_by_number)
    {
        $this->container['percentage_length_base_quantity_assigned_by_number'] = $percentage_length_base_quantity_assigned_by_number;

        return $this;
    }

    /**
     * Gets percentage_base_quantities_assigned_by_number
     *
     * @return double
     */
    public function getPercentageBaseQuantitiesAssignedByNumber()
    {
        return $this->container['percentage_base_quantities_assigned_by_number'];
    }

    /**
     * Sets percentage_base_quantities_assigned_by_number
     *
     * @param double $percentage_base_quantities_assigned_by_number percentage_base_quantities_assigned_by_number
     *
     * @return $this
     */
    public function setPercentageBaseQuantitiesAssignedByNumber($percentage_base_quantities_assigned_by_number)
    {
        $this->container['percentage_base_quantities_assigned_by_number'] = $percentage_base_quantities_assigned_by_number;

        return $this;
    }

    /**
     * Gets percentage_material_specified_by_number
     *
     * @return double
     */
    public function getPercentageMaterialSpecifiedByNumber()
    {
        return $this->container['percentage_material_specified_by_number'];
    }

    /**
     * Sets percentage_material_specified_by_number
     *
     * @param double $percentage_material_specified_by_number percentage_material_specified_by_number
     *
     * @return $this
     */
    public function setPercentageMaterialSpecifiedByNumber($percentage_material_specified_by_number)
    {
        $this->container['percentage_material_specified_by_number'] = $percentage_material_specified_by_number;

        return $this;
    }

    /**
     * Gets percentage_material_specified_by_volume
     *
     * @return double
     */
    public function getPercentageMaterialSpecifiedByVolume()
    {
        return $this->container['percentage_material_specified_by_volume'];
    }

    /**
     * Sets percentage_material_specified_by_volume
     *
     * @param double $percentage_material_specified_by_volume percentage_material_specified_by_volume
     *
     * @return $this
     */
    public function setPercentageMaterialSpecifiedByVolume($percentage_material_specified_by_volume)
    {
        $this->container['percentage_material_specified_by_volume'] = $percentage_material_specified_by_volume;

        return $this;
    }

    /**
     * Gets percentage_elements_with_known_mass_by_number
     *
     * @return double
     */
    public function getPercentageElementsWithKnownMassByNumber()
    {
        return $this->container['percentage_elements_with_known_mass_by_number'];
    }

    /**
     * Sets percentage_elements_with_known_mass_by_number
     *
     * @param double $percentage_elements_with_known_mass_by_number percentage_elements_with_known_mass_by_number
     *
     * @return $this
     */
    public function setPercentageElementsWithKnownMassByNumber($percentage_elements_with_known_mass_by_number)
    {
        $this->container['percentage_elements_with_known_mass_by_number'] = $percentage_elements_with_known_mass_by_number;

        return $this;
    }

    /**
     * Gets percentage_elements_mapped_by_number
     *
     * @return double
     */
    public function getPercentageElementsMappedByNumber()
    {
        return $this->container['percentage_elements_mapped_by_number'];
    }

    /**
     * Sets percentage_elements_mapped_by_number
     *
     * @param double $percentage_elements_mapped_by_number percentage_elements_mapped_by_number
     *
     * @return $this
     */
    public function setPercentageElementsMappedByNumber($percentage_elements_mapped_by_number)
    {
        $this->container['percentage_elements_mapped_by_number'] = $percentage_elements_mapped_by_number;

        return $this;
    }

    /**
     * Gets percentage_elements_mapped_by_volume
     *
     * @return double
     */
    public function getPercentageElementsMappedByVolume()
    {
        return $this->container['percentage_elements_mapped_by_volume'];
    }

    /**
     * Sets percentage_elements_mapped_by_volume
     *
     * @param double $percentage_elements_mapped_by_volume percentage_elements_mapped_by_volume
     *
     * @return $this
     */
    public function setPercentageElementsMappedByVolume($percentage_elements_mapped_by_volume)
    {
        $this->container['percentage_elements_mapped_by_volume'] = $percentage_elements_mapped_by_volume;

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


