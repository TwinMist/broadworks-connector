<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderTrunkGroupGetRequest14sp1
 *
 * Get the maximum and bursting maximum permissible active Trunk Group calls for the service provider.
 *         The response is either a ServiceProviderTrunkGroupGetResponse14sp1 or an ErrorResponse.
 *
 * @see ServiceProviderTrunkGroupGetResponse14sp1
 * @see ErrorResponse
 * @Groups [{"id":"b9c14e2d80e4e7749688ca13ba233b44:1592","type":"sequence"}]
 */
class ServiceProviderTrunkGroupGetRequest14sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group b9c14e2d80e4e7749688ca13ba233b44:1592
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }


}

