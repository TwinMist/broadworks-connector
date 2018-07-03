<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobileManagerModifyHomeZoneRequest
 *
 * Modify an existing home zone in the BroadWorks Mobile Manager.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class EnterpriseBroadWorksMobileManagerModifyHomeZoneRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName homeZoneId
     * @var string|null
     */
    private $homeZoneId = null;

    /**
     * @ElementName homeZoneDomainName
     * @var string|null
     */
    private $homeZoneDomainName = null;

    /**
     * @ElementName mobileCountryCode
     * @var string|null
     */
    private $mobileCountryCode = null;

    /**
     * @ElementName mobileNetworkCode
     * @var string|null
     */
    private $mobileNetworkCode = null;

    /**
     * @ElementName locationAreaCode
     * @var string|null
     */
    private $locationAreaCode = null;

    /**
     * @ElementName cellIdentity
     * @var string|null
     */
    private $cellIdentity = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for homeZoneId
     *
     * @ElementName homeZoneId
     * @return string|null
     */
    public function getHomeZoneId()
    {
        return $this->homeZoneId;
    }

    /**
     * Setter for homeZoneId
     *
     * @ElementName homeZoneId
     * @param string|null $homeZoneId
     * @return $this
     */
    public function setHomeZoneId($homeZoneId)
    {
        $this->homeZoneId = $homeZoneId;
        return $this;
    }

    /**
     * Getter for homeZoneDomainName
     *
     * @ElementName homeZoneDomainName
     * @return string|null
     */
    public function getHomeZoneDomainName()
    {
        return $this->homeZoneDomainName;
    }

    /**
     * Setter for homeZoneDomainName
     *
     * @ElementName homeZoneDomainName
     * @param string|null $homeZoneDomainName
     * @return $this
     */
    public function setHomeZoneDomainName($homeZoneDomainName)
    {
        $this->homeZoneDomainName = $homeZoneDomainName;
        return $this;
    }

    /**
     * Getter for mobileCountryCode
     *
     * @ElementName mobileCountryCode
     * @return string|null
     */
    public function getMobileCountryCode()
    {
        return $this->mobileCountryCode;
    }

    /**
     * Setter for mobileCountryCode
     *
     * @ElementName mobileCountryCode
     * @param string|null $mobileCountryCode
     * @return $this
     */
    public function setMobileCountryCode($mobileCountryCode)
    {
        $this->mobileCountryCode = $mobileCountryCode;
        return $this;
    }

    /**
     * Getter for mobileNetworkCode
     *
     * @ElementName mobileNetworkCode
     * @return string|null
     */
    public function getMobileNetworkCode()
    {
        return $this->mobileNetworkCode;
    }

    /**
     * Setter for mobileNetworkCode
     *
     * @ElementName mobileNetworkCode
     * @param string|null $mobileNetworkCode
     * @return $this
     */
    public function setMobileNetworkCode($mobileNetworkCode)
    {
        $this->mobileNetworkCode = $mobileNetworkCode;
        return $this;
    }

    /**
     * Getter for locationAreaCode
     *
     * @ElementName locationAreaCode
     * @return string|null
     */
    public function getLocationAreaCode()
    {
        return $this->locationAreaCode;
    }

    /**
     * Setter for locationAreaCode
     *
     * @ElementName locationAreaCode
     * @param string|null $locationAreaCode
     * @return $this
     */
    public function setLocationAreaCode($locationAreaCode)
    {
        $this->locationAreaCode = $locationAreaCode;
        return $this;
    }

    /**
     * Getter for cellIdentity
     *
     * @ElementName cellIdentity
     * @return string|null
     */
    public function getCellIdentity()
    {
        return $this->cellIdentity;
    }

    /**
     * Setter for cellIdentity
     *
     * @ElementName cellIdentity
     * @param string|null $cellIdentity
     * @return $this
     */
    public function setCellIdentity($cellIdentity)
    {
        $this->cellIdentity = $cellIdentity;
        return $this;
    }


}

