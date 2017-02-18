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
class SideEffect implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $term public property
     */
    public $term;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $count public property
     */
    public $count;

    /**
     * @todo Write general description for this property
     * @required
     * @var double $percent public property
     */
    public $percent;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $term    Initialization value for $this->term
     * @param integer $count   Initialization value for $this->count
     * @param double  $percent Initialization value for $this->percent
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->term    = func_get_arg(0);
            $this->count   = func_get_arg(1);
            $this->percent = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['term']    = $this->term;
        $json['count']   = $this->count;
        $json['percent'] = $this->percent;

        return $json;
    }
}
