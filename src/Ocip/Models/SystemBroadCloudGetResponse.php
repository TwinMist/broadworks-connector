<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadCloudGetResponse
 *
 * Response to the SystemBroadCloudGetRequest.
 *         The response contains the system interface attributes for Messaging
 * Server/BroadCloud.
 */
class SystemBroadCloudGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName provisioningUrl
     * @var string|null
     */
    private $provisioningUrl = null;

    /**
     * @ElementName provisioningUserId
     * @var string|null
     */
    private $provisioningUserId = null;

    /**
     * @ElementName enableSynchronization
     * @var bool|null
     */
    private $enableSynchronization = null;

    /**
     * Getter for provisioningUrl
     *
     * @ElementName provisioningUrl
     * @return string|null
     */
    public function getProvisioningUrl()
    {
        return $this->provisioningUrl;
    }

    /**
     * Setter for provisioningUrl
     *
     * @ElementName provisioningUrl
     * @param string|null $provisioningUrl
     * @return $this
     */
    public function setProvisioningUrl($provisioningUrl)
    {
        $this->provisioningUrl = $provisioningUrl;
        return $this;
    }

    /**
     * Getter for provisioningUserId
     *
     * @ElementName provisioningUserId
     * @return string|null
     */
    public function getProvisioningUserId()
    {
        return $this->provisioningUserId;
    }

    /**
     * Setter for provisioningUserId
     *
     * @ElementName provisioningUserId
     * @param string|null $provisioningUserId
     * @return $this
     */
    public function setProvisioningUserId($provisioningUserId)
    {
        $this->provisioningUserId = $provisioningUserId;
        return $this;
    }

    /**
     * Getter for enableSynchronization
     *
     * @ElementName enableSynchronization
     * @return bool|null
     */
    public function getEnableSynchronization()
    {
        return $this->enableSynchronization;
    }

    /**
     * Setter for enableSynchronization
     *
     * @ElementName enableSynchronization
     * @param bool|null $enableSynchronization
     * @return $this
     */
    public function setEnableSynchronization($enableSynchronization)
    {
        $this->enableSynchronization = $enableSynchronization;
        return $this;
    }


}

