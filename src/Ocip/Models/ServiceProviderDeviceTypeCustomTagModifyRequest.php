<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDeviceTypeCustomTagModifyRequest
 *
 * Request to modify a static configuration tag for an access device type used in a
 * service provider.
 *
 *         The tagValueToEncrypt element can only be used by a system
 * administrator.
 *         
 *         The following elements are only used in XS data mode and ignored in AS
 * data mode:
 *           tagValueToEncrypt
 *           
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderDeviceTypeCustomTagModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName deviceType
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName tagName
     * @var string|null
     */
    private $tagName = null;

    /**
     * @ElementName tagValue
     * @var string|null
     */
    private $tagValue = null;

    /**
     * @ElementName tagValueToEncrypt
     * @var string|null
     */
    private $tagValueToEncrypt = null;

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
     * Getter for deviceType
     *
     * @ElementName deviceType
     * @return string|null
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @ElementName deviceType
     * @param string|null $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * Getter for tagName
     *
     * @ElementName tagName
     * @return string|null
     */
    public function getTagName()
    {
        return $this->tagName;
    }

    /**
     * Setter for tagName
     *
     * @ElementName tagName
     * @param string|null $tagName
     * @return $this
     */
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;
        return $this;
    }

    /**
     * Getter for tagValue
     *
     * @ElementName tagValue
     * @return string|null
     */
    public function getTagValue()
    {
        return $this->tagValue;
    }

    /**
     * Setter for tagValue
     *
     * @ElementName tagValue
     * @param string|null $tagValue
     * @return $this
     */
    public function setTagValue($tagValue)
    {
        $this->tagValue = $tagValue;
        return $this;
    }

    /**
     * Getter for tagValueToEncrypt
     *
     * @ElementName tagValueToEncrypt
     * @return string|null
     */
    public function getTagValueToEncrypt()
    {
        return $this->tagValueToEncrypt;
    }

    /**
     * Setter for tagValueToEncrypt
     *
     * @ElementName tagValueToEncrypt
     * @param string|null $tagValueToEncrypt
     * @return $this
     */
    public function setTagValueToEncrypt($tagValueToEncrypt)
    {
        $this->tagValueToEncrypt = $tagValueToEncrypt;
        return $this;
    }


}
