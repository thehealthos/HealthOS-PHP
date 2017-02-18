<?php
/*
 * HealthOSLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace HealthOSLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class SearchManufacturersResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps manufacturer_id
     * @var integer $manufacturerId public property
     */
    public $manufacturerId;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $manufacturerId Initialization value for $this->manufacturerId
     * @param string  $name           Initialization value for $this->name
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->manufacturerId = func_get_arg(0);
            $this->name           = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['manufacturer_id'] = $this->manufacturerId;
        $json['name']            = $this->name;

        return $json;
    }
}
