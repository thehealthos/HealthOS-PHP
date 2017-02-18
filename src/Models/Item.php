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
class Item implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $name Initialization value for $this->name
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->name = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name'] = $this->name;

        return $json;
    }
}
