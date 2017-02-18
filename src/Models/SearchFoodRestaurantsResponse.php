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
class SearchFoodRestaurantsResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $logo public property
     */
    public $logo;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @required
     * @maps food_restaurant_id
     * @var string $foodRestaurantId public property
     */
    public $foodRestaurantId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps search_score
     * @var double $searchScore public property
     */
    public $searchScore;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $logo             Initialization value for $this->logo
     * @param string $name             Initialization value for $this->name
     * @param string $foodRestaurantId Initialization value for $this->foodRestaurantId
     * @param double $searchScore      Initialization value for $this->searchScore
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->logo             = func_get_arg(0);
            $this->name             = func_get_arg(1);
            $this->foodRestaurantId = func_get_arg(2);
            $this->searchScore      = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['logo']               = $this->logo;
        $json['name']               = $this->name;
        $json['food_restaurant_id'] = $this->foodRestaurantId;
        $json['search_score']       = $this->searchScore;

        return $json;
    }
}
