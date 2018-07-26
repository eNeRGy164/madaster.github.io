<?php
/**
 * BuildingResponse
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
 * BuildingResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BuildingResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BuildingResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'portfolio_id' => 'string',
        'name' => 'string',
        'images' => 'string[]',
        'cadastral_designation' => 'string',
        'cadastral_area' => 'int',
        'parcelnumber' => 'string',
        'public_law_restriction' => 'string',
        'completion_date' => '\DateTime',
        'last_renovation_date' => '\DateTime',
        'address_street' => 'string',
        'address_housenumber' => 'string',
        'address_housenumber_addition' => 'string',
        'address_zipcode' => 'string',
        'address_city' => 'string',
        'address_country' => 'string',
        'building_usage' => 'string',
        'gross_surface_area' => 'double',
        'energy_label' => 'string',
        'energy_performance_coefficient' => 'double',
        'energy_index' => 'double',
        'expected_lifespan' => 'int',
        'expected_lifespan_structure' => 'int',
        'expected_lifespan_skin' => 'int',
        'expected_lifespan_services' => 'int',
        'expected_lifespan_space_plan' => 'int',
        'expected_lifespan_stuff' => 'int',
        'breeam_label' => 'int',
        'gpr_label' => 'double',
        'mpg_label' => 'double',
        'mpg_label_manual' => 'double',
        'mpg_label_indicative' => 'double',
        'leed_label' => 'string',
        'is_dirty' => 'bool',
        'has_dirty_elements' => 'bool',
        'most_recent_bim_info' => '\DateTime',
        'geo_latitude' => 'double',
        'geo_longtitude' => 'double',
        'phase_type' => 'string',
        'classification_type' => 'string',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'portfolio_id' => 'uuid',
        'name' => null,
        'images' => null,
        'cadastral_designation' => null,
        'cadastral_area' => 'int32',
        'parcelnumber' => null,
        'public_law_restriction' => null,
        'completion_date' => 'date-time',
        'last_renovation_date' => 'date-time',
        'address_street' => null,
        'address_housenumber' => null,
        'address_housenumber_addition' => null,
        'address_zipcode' => null,
        'address_city' => null,
        'address_country' => null,
        'building_usage' => null,
        'gross_surface_area' => 'double',
        'energy_label' => null,
        'energy_performance_coefficient' => 'double',
        'energy_index' => 'double',
        'expected_lifespan' => 'int32',
        'expected_lifespan_structure' => 'int32',
        'expected_lifespan_skin' => 'int32',
        'expected_lifespan_services' => 'int32',
        'expected_lifespan_space_plan' => 'int32',
        'expected_lifespan_stuff' => 'int32',
        'breeam_label' => 'int32',
        'gpr_label' => 'double',
        'mpg_label' => 'double',
        'mpg_label_manual' => 'double',
        'mpg_label_indicative' => 'double',
        'leed_label' => null,
        'is_dirty' => null,
        'has_dirty_elements' => null,
        'most_recent_bim_info' => 'date-time',
        'geo_latitude' => 'double',
        'geo_longtitude' => 'double',
        'phase_type' => 'uuid',
        'classification_type' => 'uuid',
        'id' => 'uuid'
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
        'portfolio_id' => 'portfolioId',
        'name' => 'name',
        'images' => 'images',
        'cadastral_designation' => 'cadastralDesignation',
        'cadastral_area' => 'cadastralArea',
        'parcelnumber' => 'parcelnumber',
        'public_law_restriction' => 'publicLawRestriction',
        'completion_date' => 'completionDate',
        'last_renovation_date' => 'lastRenovationDate',
        'address_street' => 'addressStreet',
        'address_housenumber' => 'addressHousenumber',
        'address_housenumber_addition' => 'addressHousenumberAddition',
        'address_zipcode' => 'addressZipcode',
        'address_city' => 'addressCity',
        'address_country' => 'addressCountry',
        'building_usage' => 'buildingUsage',
        'gross_surface_area' => 'grossSurfaceArea',
        'energy_label' => 'energyLabel',
        'energy_performance_coefficient' => 'energyPerformanceCoefficient',
        'energy_index' => 'energyIndex',
        'expected_lifespan' => 'expectedLifespan',
        'expected_lifespan_structure' => 'expectedLifespanStructure',
        'expected_lifespan_skin' => 'expectedLifespanSkin',
        'expected_lifespan_services' => 'expectedLifespanServices',
        'expected_lifespan_space_plan' => 'expectedLifespanSpacePlan',
        'expected_lifespan_stuff' => 'expectedLifespanStuff',
        'breeam_label' => 'breeamLabel',
        'gpr_label' => 'gprLabel',
        'mpg_label' => 'mpgLabel',
        'mpg_label_manual' => 'mpgLabelManual',
        'mpg_label_indicative' => 'mpgLabelIndicative',
        'leed_label' => 'leedLabel',
        'is_dirty' => 'isDirty',
        'has_dirty_elements' => 'hasDirtyElements',
        'most_recent_bim_info' => 'mostRecentBimInfo',
        'geo_latitude' => 'geoLatitude',
        'geo_longtitude' => 'geoLongtitude',
        'phase_type' => 'phaseType',
        'classification_type' => 'classificationType',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'portfolio_id' => 'setPortfolioId',
        'name' => 'setName',
        'images' => 'setImages',
        'cadastral_designation' => 'setCadastralDesignation',
        'cadastral_area' => 'setCadastralArea',
        'parcelnumber' => 'setParcelnumber',
        'public_law_restriction' => 'setPublicLawRestriction',
        'completion_date' => 'setCompletionDate',
        'last_renovation_date' => 'setLastRenovationDate',
        'address_street' => 'setAddressStreet',
        'address_housenumber' => 'setAddressHousenumber',
        'address_housenumber_addition' => 'setAddressHousenumberAddition',
        'address_zipcode' => 'setAddressZipcode',
        'address_city' => 'setAddressCity',
        'address_country' => 'setAddressCountry',
        'building_usage' => 'setBuildingUsage',
        'gross_surface_area' => 'setGrossSurfaceArea',
        'energy_label' => 'setEnergyLabel',
        'energy_performance_coefficient' => 'setEnergyPerformanceCoefficient',
        'energy_index' => 'setEnergyIndex',
        'expected_lifespan' => 'setExpectedLifespan',
        'expected_lifespan_structure' => 'setExpectedLifespanStructure',
        'expected_lifespan_skin' => 'setExpectedLifespanSkin',
        'expected_lifespan_services' => 'setExpectedLifespanServices',
        'expected_lifespan_space_plan' => 'setExpectedLifespanSpacePlan',
        'expected_lifespan_stuff' => 'setExpectedLifespanStuff',
        'breeam_label' => 'setBreeamLabel',
        'gpr_label' => 'setGprLabel',
        'mpg_label' => 'setMpgLabel',
        'mpg_label_manual' => 'setMpgLabelManual',
        'mpg_label_indicative' => 'setMpgLabelIndicative',
        'leed_label' => 'setLeedLabel',
        'is_dirty' => 'setIsDirty',
        'has_dirty_elements' => 'setHasDirtyElements',
        'most_recent_bim_info' => 'setMostRecentBimInfo',
        'geo_latitude' => 'setGeoLatitude',
        'geo_longtitude' => 'setGeoLongtitude',
        'phase_type' => 'setPhaseType',
        'classification_type' => 'setClassificationType',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'portfolio_id' => 'getPortfolioId',
        'name' => 'getName',
        'images' => 'getImages',
        'cadastral_designation' => 'getCadastralDesignation',
        'cadastral_area' => 'getCadastralArea',
        'parcelnumber' => 'getParcelnumber',
        'public_law_restriction' => 'getPublicLawRestriction',
        'completion_date' => 'getCompletionDate',
        'last_renovation_date' => 'getLastRenovationDate',
        'address_street' => 'getAddressStreet',
        'address_housenumber' => 'getAddressHousenumber',
        'address_housenumber_addition' => 'getAddressHousenumberAddition',
        'address_zipcode' => 'getAddressZipcode',
        'address_city' => 'getAddressCity',
        'address_country' => 'getAddressCountry',
        'building_usage' => 'getBuildingUsage',
        'gross_surface_area' => 'getGrossSurfaceArea',
        'energy_label' => 'getEnergyLabel',
        'energy_performance_coefficient' => 'getEnergyPerformanceCoefficient',
        'energy_index' => 'getEnergyIndex',
        'expected_lifespan' => 'getExpectedLifespan',
        'expected_lifespan_structure' => 'getExpectedLifespanStructure',
        'expected_lifespan_skin' => 'getExpectedLifespanSkin',
        'expected_lifespan_services' => 'getExpectedLifespanServices',
        'expected_lifespan_space_plan' => 'getExpectedLifespanSpacePlan',
        'expected_lifespan_stuff' => 'getExpectedLifespanStuff',
        'breeam_label' => 'getBreeamLabel',
        'gpr_label' => 'getGprLabel',
        'mpg_label' => 'getMpgLabel',
        'mpg_label_manual' => 'getMpgLabelManual',
        'mpg_label_indicative' => 'getMpgLabelIndicative',
        'leed_label' => 'getLeedLabel',
        'is_dirty' => 'getIsDirty',
        'has_dirty_elements' => 'getHasDirtyElements',
        'most_recent_bim_info' => 'getMostRecentBimInfo',
        'geo_latitude' => 'getGeoLatitude',
        'geo_longtitude' => 'getGeoLongtitude',
        'phase_type' => 'getPhaseType',
        'classification_type' => 'getClassificationType',
        'id' => 'getId'
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
        $this->container['portfolio_id'] = isset($data['portfolio_id']) ? $data['portfolio_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['cadastral_designation'] = isset($data['cadastral_designation']) ? $data['cadastral_designation'] : null;
        $this->container['cadastral_area'] = isset($data['cadastral_area']) ? $data['cadastral_area'] : null;
        $this->container['parcelnumber'] = isset($data['parcelnumber']) ? $data['parcelnumber'] : null;
        $this->container['public_law_restriction'] = isset($data['public_law_restriction']) ? $data['public_law_restriction'] : null;
        $this->container['completion_date'] = isset($data['completion_date']) ? $data['completion_date'] : null;
        $this->container['last_renovation_date'] = isset($data['last_renovation_date']) ? $data['last_renovation_date'] : null;
        $this->container['address_street'] = isset($data['address_street']) ? $data['address_street'] : null;
        $this->container['address_housenumber'] = isset($data['address_housenumber']) ? $data['address_housenumber'] : null;
        $this->container['address_housenumber_addition'] = isset($data['address_housenumber_addition']) ? $data['address_housenumber_addition'] : null;
        $this->container['address_zipcode'] = isset($data['address_zipcode']) ? $data['address_zipcode'] : null;
        $this->container['address_city'] = isset($data['address_city']) ? $data['address_city'] : null;
        $this->container['address_country'] = isset($data['address_country']) ? $data['address_country'] : null;
        $this->container['building_usage'] = isset($data['building_usage']) ? $data['building_usage'] : null;
        $this->container['gross_surface_area'] = isset($data['gross_surface_area']) ? $data['gross_surface_area'] : null;
        $this->container['energy_label'] = isset($data['energy_label']) ? $data['energy_label'] : null;
        $this->container['energy_performance_coefficient'] = isset($data['energy_performance_coefficient']) ? $data['energy_performance_coefficient'] : null;
        $this->container['energy_index'] = isset($data['energy_index']) ? $data['energy_index'] : null;
        $this->container['expected_lifespan'] = isset($data['expected_lifespan']) ? $data['expected_lifespan'] : null;
        $this->container['expected_lifespan_structure'] = isset($data['expected_lifespan_structure']) ? $data['expected_lifespan_structure'] : null;
        $this->container['expected_lifespan_skin'] = isset($data['expected_lifespan_skin']) ? $data['expected_lifespan_skin'] : null;
        $this->container['expected_lifespan_services'] = isset($data['expected_lifespan_services']) ? $data['expected_lifespan_services'] : null;
        $this->container['expected_lifespan_space_plan'] = isset($data['expected_lifespan_space_plan']) ? $data['expected_lifespan_space_plan'] : null;
        $this->container['expected_lifespan_stuff'] = isset($data['expected_lifespan_stuff']) ? $data['expected_lifespan_stuff'] : null;
        $this->container['breeam_label'] = isset($data['breeam_label']) ? $data['breeam_label'] : null;
        $this->container['gpr_label'] = isset($data['gpr_label']) ? $data['gpr_label'] : null;
        $this->container['mpg_label'] = isset($data['mpg_label']) ? $data['mpg_label'] : null;
        $this->container['mpg_label_manual'] = isset($data['mpg_label_manual']) ? $data['mpg_label_manual'] : null;
        $this->container['mpg_label_indicative'] = isset($data['mpg_label_indicative']) ? $data['mpg_label_indicative'] : null;
        $this->container['leed_label'] = isset($data['leed_label']) ? $data['leed_label'] : null;
        $this->container['is_dirty'] = isset($data['is_dirty']) ? $data['is_dirty'] : null;
        $this->container['has_dirty_elements'] = isset($data['has_dirty_elements']) ? $data['has_dirty_elements'] : null;
        $this->container['most_recent_bim_info'] = isset($data['most_recent_bim_info']) ? $data['most_recent_bim_info'] : null;
        $this->container['geo_latitude'] = isset($data['geo_latitude']) ? $data['geo_latitude'] : null;
        $this->container['geo_longtitude'] = isset($data['geo_longtitude']) ? $data['geo_longtitude'] : null;
        $this->container['phase_type'] = isset($data['phase_type']) ? $data['phase_type'] : null;
        $this->container['classification_type'] = isset($data['classification_type']) ? $data['classification_type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
     * Gets portfolio_id
     *
     * @return string
     */
    public function getPortfolioId()
    {
        return $this->container['portfolio_id'];
    }

    /**
     * Sets portfolio_id
     *
     * @param string $portfolio_id portfolio_id
     *
     * @return $this
     */
    public function setPortfolioId($portfolio_id)
    {
        $this->container['portfolio_id'] = $portfolio_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets images
     *
     * @return string[]
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param string[] $images images
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets cadastral_designation
     *
     * @return string
     */
    public function getCadastralDesignation()
    {
        return $this->container['cadastral_designation'];
    }

    /**
     * Sets cadastral_designation
     *
     * @param string $cadastral_designation cadastral_designation
     *
     * @return $this
     */
    public function setCadastralDesignation($cadastral_designation)
    {
        $this->container['cadastral_designation'] = $cadastral_designation;

        return $this;
    }

    /**
     * Gets cadastral_area
     *
     * @return int
     */
    public function getCadastralArea()
    {
        return $this->container['cadastral_area'];
    }

    /**
     * Sets cadastral_area
     *
     * @param int $cadastral_area cadastral_area
     *
     * @return $this
     */
    public function setCadastralArea($cadastral_area)
    {
        $this->container['cadastral_area'] = $cadastral_area;

        return $this;
    }

    /**
     * Gets parcelnumber
     *
     * @return string
     */
    public function getParcelnumber()
    {
        return $this->container['parcelnumber'];
    }

    /**
     * Sets parcelnumber
     *
     * @param string $parcelnumber parcelnumber
     *
     * @return $this
     */
    public function setParcelnumber($parcelnumber)
    {
        $this->container['parcelnumber'] = $parcelnumber;

        return $this;
    }

    /**
     * Gets public_law_restriction
     *
     * @return string
     */
    public function getPublicLawRestriction()
    {
        return $this->container['public_law_restriction'];
    }

    /**
     * Sets public_law_restriction
     *
     * @param string $public_law_restriction public_law_restriction
     *
     * @return $this
     */
    public function setPublicLawRestriction($public_law_restriction)
    {
        $this->container['public_law_restriction'] = $public_law_restriction;

        return $this;
    }

    /**
     * Gets completion_date
     *
     * @return \DateTime
     */
    public function getCompletionDate()
    {
        return $this->container['completion_date'];
    }

    /**
     * Sets completion_date
     *
     * @param \DateTime $completion_date completion_date
     *
     * @return $this
     */
    public function setCompletionDate($completion_date)
    {
        $this->container['completion_date'] = $completion_date;

        return $this;
    }

    /**
     * Gets last_renovation_date
     *
     * @return \DateTime
     */
    public function getLastRenovationDate()
    {
        return $this->container['last_renovation_date'];
    }

    /**
     * Sets last_renovation_date
     *
     * @param \DateTime $last_renovation_date last_renovation_date
     *
     * @return $this
     */
    public function setLastRenovationDate($last_renovation_date)
    {
        $this->container['last_renovation_date'] = $last_renovation_date;

        return $this;
    }

    /**
     * Gets address_street
     *
     * @return string
     */
    public function getAddressStreet()
    {
        return $this->container['address_street'];
    }

    /**
     * Sets address_street
     *
     * @param string $address_street address_street
     *
     * @return $this
     */
    public function setAddressStreet($address_street)
    {
        $this->container['address_street'] = $address_street;

        return $this;
    }

    /**
     * Gets address_housenumber
     *
     * @return string
     */
    public function getAddressHousenumber()
    {
        return $this->container['address_housenumber'];
    }

    /**
     * Sets address_housenumber
     *
     * @param string $address_housenumber address_housenumber
     *
     * @return $this
     */
    public function setAddressHousenumber($address_housenumber)
    {
        $this->container['address_housenumber'] = $address_housenumber;

        return $this;
    }

    /**
     * Gets address_housenumber_addition
     *
     * @return string
     */
    public function getAddressHousenumberAddition()
    {
        return $this->container['address_housenumber_addition'];
    }

    /**
     * Sets address_housenumber_addition
     *
     * @param string $address_housenumber_addition address_housenumber_addition
     *
     * @return $this
     */
    public function setAddressHousenumberAddition($address_housenumber_addition)
    {
        $this->container['address_housenumber_addition'] = $address_housenumber_addition;

        return $this;
    }

    /**
     * Gets address_zipcode
     *
     * @return string
     */
    public function getAddressZipcode()
    {
        return $this->container['address_zipcode'];
    }

    /**
     * Sets address_zipcode
     *
     * @param string $address_zipcode address_zipcode
     *
     * @return $this
     */
    public function setAddressZipcode($address_zipcode)
    {
        $this->container['address_zipcode'] = $address_zipcode;

        return $this;
    }

    /**
     * Gets address_city
     *
     * @return string
     */
    public function getAddressCity()
    {
        return $this->container['address_city'];
    }

    /**
     * Sets address_city
     *
     * @param string $address_city address_city
     *
     * @return $this
     */
    public function setAddressCity($address_city)
    {
        $this->container['address_city'] = $address_city;

        return $this;
    }

    /**
     * Gets address_country
     *
     * @return string
     */
    public function getAddressCountry()
    {
        return $this->container['address_country'];
    }

    /**
     * Sets address_country
     *
     * @param string $address_country address_country
     *
     * @return $this
     */
    public function setAddressCountry($address_country)
    {
        $this->container['address_country'] = $address_country;

        return $this;
    }

    /**
     * Gets building_usage
     *
     * @return string
     */
    public function getBuildingUsage()
    {
        return $this->container['building_usage'];
    }

    /**
     * Sets building_usage
     *
     * @param string $building_usage building_usage
     *
     * @return $this
     */
    public function setBuildingUsage($building_usage)
    {
        $this->container['building_usage'] = $building_usage;

        return $this;
    }

    /**
     * Gets gross_surface_area
     *
     * @return double
     */
    public function getGrossSurfaceArea()
    {
        return $this->container['gross_surface_area'];
    }

    /**
     * Sets gross_surface_area
     *
     * @param double $gross_surface_area gross_surface_area
     *
     * @return $this
     */
    public function setGrossSurfaceArea($gross_surface_area)
    {
        $this->container['gross_surface_area'] = $gross_surface_area;

        return $this;
    }

    /**
     * Gets energy_label
     *
     * @return string
     */
    public function getEnergyLabel()
    {
        return $this->container['energy_label'];
    }

    /**
     * Sets energy_label
     *
     * @param string $energy_label energy_label
     *
     * @return $this
     */
    public function setEnergyLabel($energy_label)
    {
        $this->container['energy_label'] = $energy_label;

        return $this;
    }

    /**
     * Gets energy_performance_coefficient
     *
     * @return double
     */
    public function getEnergyPerformanceCoefficient()
    {
        return $this->container['energy_performance_coefficient'];
    }

    /**
     * Sets energy_performance_coefficient
     *
     * @param double $energy_performance_coefficient energy_performance_coefficient
     *
     * @return $this
     */
    public function setEnergyPerformanceCoefficient($energy_performance_coefficient)
    {
        $this->container['energy_performance_coefficient'] = $energy_performance_coefficient;

        return $this;
    }

    /**
     * Gets energy_index
     *
     * @return double
     */
    public function getEnergyIndex()
    {
        return $this->container['energy_index'];
    }

    /**
     * Sets energy_index
     *
     * @param double $energy_index energy_index
     *
     * @return $this
     */
    public function setEnergyIndex($energy_index)
    {
        $this->container['energy_index'] = $energy_index;

        return $this;
    }

    /**
     * Gets expected_lifespan
     *
     * @return int
     */
    public function getExpectedLifespan()
    {
        return $this->container['expected_lifespan'];
    }

    /**
     * Sets expected_lifespan
     *
     * @param int $expected_lifespan expected_lifespan
     *
     * @return $this
     */
    public function setExpectedLifespan($expected_lifespan)
    {
        $this->container['expected_lifespan'] = $expected_lifespan;

        return $this;
    }

    /**
     * Gets expected_lifespan_structure
     *
     * @return int
     */
    public function getExpectedLifespanStructure()
    {
        return $this->container['expected_lifespan_structure'];
    }

    /**
     * Sets expected_lifespan_structure
     *
     * @param int $expected_lifespan_structure expected_lifespan_structure
     *
     * @return $this
     */
    public function setExpectedLifespanStructure($expected_lifespan_structure)
    {
        $this->container['expected_lifespan_structure'] = $expected_lifespan_structure;

        return $this;
    }

    /**
     * Gets expected_lifespan_skin
     *
     * @return int
     */
    public function getExpectedLifespanSkin()
    {
        return $this->container['expected_lifespan_skin'];
    }

    /**
     * Sets expected_lifespan_skin
     *
     * @param int $expected_lifespan_skin expected_lifespan_skin
     *
     * @return $this
     */
    public function setExpectedLifespanSkin($expected_lifespan_skin)
    {
        $this->container['expected_lifespan_skin'] = $expected_lifespan_skin;

        return $this;
    }

    /**
     * Gets expected_lifespan_services
     *
     * @return int
     */
    public function getExpectedLifespanServices()
    {
        return $this->container['expected_lifespan_services'];
    }

    /**
     * Sets expected_lifespan_services
     *
     * @param int $expected_lifespan_services expected_lifespan_services
     *
     * @return $this
     */
    public function setExpectedLifespanServices($expected_lifespan_services)
    {
        $this->container['expected_lifespan_services'] = $expected_lifespan_services;

        return $this;
    }

    /**
     * Gets expected_lifespan_space_plan
     *
     * @return int
     */
    public function getExpectedLifespanSpacePlan()
    {
        return $this->container['expected_lifespan_space_plan'];
    }

    /**
     * Sets expected_lifespan_space_plan
     *
     * @param int $expected_lifespan_space_plan expected_lifespan_space_plan
     *
     * @return $this
     */
    public function setExpectedLifespanSpacePlan($expected_lifespan_space_plan)
    {
        $this->container['expected_lifespan_space_plan'] = $expected_lifespan_space_plan;

        return $this;
    }

    /**
     * Gets expected_lifespan_stuff
     *
     * @return int
     */
    public function getExpectedLifespanStuff()
    {
        return $this->container['expected_lifespan_stuff'];
    }

    /**
     * Sets expected_lifespan_stuff
     *
     * @param int $expected_lifespan_stuff expected_lifespan_stuff
     *
     * @return $this
     */
    public function setExpectedLifespanStuff($expected_lifespan_stuff)
    {
        $this->container['expected_lifespan_stuff'] = $expected_lifespan_stuff;

        return $this;
    }

    /**
     * Gets breeam_label
     *
     * @return int
     */
    public function getBreeamLabel()
    {
        return $this->container['breeam_label'];
    }

    /**
     * Sets breeam_label
     *
     * @param int $breeam_label breeam_label
     *
     * @return $this
     */
    public function setBreeamLabel($breeam_label)
    {
        $this->container['breeam_label'] = $breeam_label;

        return $this;
    }

    /**
     * Gets gpr_label
     *
     * @return double
     */
    public function getGprLabel()
    {
        return $this->container['gpr_label'];
    }

    /**
     * Sets gpr_label
     *
     * @param double $gpr_label gpr_label
     *
     * @return $this
     */
    public function setGprLabel($gpr_label)
    {
        $this->container['gpr_label'] = $gpr_label;

        return $this;
    }

    /**
     * Gets mpg_label
     *
     * @return double
     */
    public function getMpgLabel()
    {
        return $this->container['mpg_label'];
    }

    /**
     * Sets mpg_label
     *
     * @param double $mpg_label mpg_label
     *
     * @return $this
     */
    public function setMpgLabel($mpg_label)
    {
        $this->container['mpg_label'] = $mpg_label;

        return $this;
    }

    /**
     * Gets mpg_label_manual
     *
     * @return double
     */
    public function getMpgLabelManual()
    {
        return $this->container['mpg_label_manual'];
    }

    /**
     * Sets mpg_label_manual
     *
     * @param double $mpg_label_manual mpg_label_manual
     *
     * @return $this
     */
    public function setMpgLabelManual($mpg_label_manual)
    {
        $this->container['mpg_label_manual'] = $mpg_label_manual;

        return $this;
    }

    /**
     * Gets mpg_label_indicative
     *
     * @return double
     */
    public function getMpgLabelIndicative()
    {
        return $this->container['mpg_label_indicative'];
    }

    /**
     * Sets mpg_label_indicative
     *
     * @param double $mpg_label_indicative mpg_label_indicative
     *
     * @return $this
     */
    public function setMpgLabelIndicative($mpg_label_indicative)
    {
        $this->container['mpg_label_indicative'] = $mpg_label_indicative;

        return $this;
    }

    /**
     * Gets leed_label
     *
     * @return string
     */
    public function getLeedLabel()
    {
        return $this->container['leed_label'];
    }

    /**
     * Sets leed_label
     *
     * @param string $leed_label leed_label
     *
     * @return $this
     */
    public function setLeedLabel($leed_label)
    {
        $this->container['leed_label'] = $leed_label;

        return $this;
    }

    /**
     * Gets is_dirty
     *
     * @return bool
     */
    public function getIsDirty()
    {
        return $this->container['is_dirty'];
    }

    /**
     * Sets is_dirty
     *
     * @param bool $is_dirty is_dirty
     *
     * @return $this
     */
    public function setIsDirty($is_dirty)
    {
        $this->container['is_dirty'] = $is_dirty;

        return $this;
    }

    /**
     * Gets has_dirty_elements
     *
     * @return bool
     */
    public function getHasDirtyElements()
    {
        return $this->container['has_dirty_elements'];
    }

    /**
     * Sets has_dirty_elements
     *
     * @param bool $has_dirty_elements has_dirty_elements
     *
     * @return $this
     */
    public function setHasDirtyElements($has_dirty_elements)
    {
        $this->container['has_dirty_elements'] = $has_dirty_elements;

        return $this;
    }

    /**
     * Gets most_recent_bim_info
     *
     * @return \DateTime
     */
    public function getMostRecentBimInfo()
    {
        return $this->container['most_recent_bim_info'];
    }

    /**
     * Sets most_recent_bim_info
     *
     * @param \DateTime $most_recent_bim_info most_recent_bim_info
     *
     * @return $this
     */
    public function setMostRecentBimInfo($most_recent_bim_info)
    {
        $this->container['most_recent_bim_info'] = $most_recent_bim_info;

        return $this;
    }

    /**
     * Gets geo_latitude
     *
     * @return double
     */
    public function getGeoLatitude()
    {
        return $this->container['geo_latitude'];
    }

    /**
     * Sets geo_latitude
     *
     * @param double $geo_latitude geo_latitude
     *
     * @return $this
     */
    public function setGeoLatitude($geo_latitude)
    {
        $this->container['geo_latitude'] = $geo_latitude;

        return $this;
    }

    /**
     * Gets geo_longtitude
     *
     * @return double
     */
    public function getGeoLongtitude()
    {
        return $this->container['geo_longtitude'];
    }

    /**
     * Sets geo_longtitude
     *
     * @param double $geo_longtitude geo_longtitude
     *
     * @return $this
     */
    public function setGeoLongtitude($geo_longtitude)
    {
        $this->container['geo_longtitude'] = $geo_longtitude;

        return $this;
    }

    /**
     * Gets phase_type
     *
     * @return string
     */
    public function getPhaseType()
    {
        return $this->container['phase_type'];
    }

    /**
     * Sets phase_type
     *
     * @param string $phase_type phase_type
     *
     * @return $this
     */
    public function setPhaseType($phase_type)
    {
        $this->container['phase_type'] = $phase_type;

        return $this;
    }

    /**
     * Gets classification_type
     *
     * @return string
     */
    public function getClassificationType()
    {
        return $this->container['classification_type'];
    }

    /**
     * Sets classification_type
     *
     * @param string $classification_type classification_type
     *
     * @return $this
     */
    public function setClassificationType($classification_type)
    {
        $this->container['classification_type'] = $classification_type;

        return $this;
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
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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


