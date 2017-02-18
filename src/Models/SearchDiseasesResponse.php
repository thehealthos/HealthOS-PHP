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
class SearchDiseasesResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps disease_name
     * @var string $diseaseName public property
     */
    public $diseaseName;

    /**
     * @todo Write general description for this property
     * @required
     * @maps disease_cat
     * @var string $diseaseCat public property
     */
    public $diseaseCat;

    /**
     * @todo Write general description for this property
     * @required
     * @maps disease_info
     * @var string $diseaseInfo public property
     */
    public $diseaseInfo;

    /**
     * @todo Write general description for this property
     * @required
     * @maps disease_id
     * @var string $diseaseId public property
     */
    public $diseaseId;

    /**
     * @todo Write general description for this property
     * @required
     * @maps search_score
     * @var double $searchScore public property
     */
    public $searchScore;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $diseaseName Initialization value for $this->diseaseName
     * @param string $diseaseCat  Initialization value for $this->diseaseCat
     * @param string $diseaseInfo Initialization value for $this->diseaseInfo
     * @param string $diseaseId   Initialization value for $this->diseaseId
     * @param double $searchScore Initialization value for $this->searchScore
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->diseaseName = func_get_arg(0);
            $this->diseaseCat  = func_get_arg(1);
            $this->diseaseInfo = func_get_arg(2);
            $this->diseaseId   = func_get_arg(3);
            $this->searchScore = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['disease_name'] = $this->diseaseName;
        $json['disease_cat']  = $this->diseaseCat;
        $json['disease_info'] = $this->diseaseInfo;
        $json['disease_id']   = $this->diseaseId;
        $json['search_score'] = $this->searchScore;

        return $json;
    }
}
