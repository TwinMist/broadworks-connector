<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderNetworkClassOfServiceAssignListRequest21
 *
 * Assign a list of Network Classes of Service to a service provider.
 *         A default Network Class of Service must be specified unless
 *         there is already one assigned to the service provider.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderNetworkClassOfServiceAssignListRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName networkClassOfService
     * @var string[]
     */
    private $networkClassOfService = array(
        
    );

    /**
     * @ElementName defaultNetworkClassOfService
     * @var \CWM\BroadWorksConnector\Ocip\Models\DefaultNetworkClassOfService|null
     */
    private $defaultNetworkClassOfService = null;

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
     * Getter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @return string[]
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @param string[] $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }

    /**
     * Adder for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @param string $networkClassOfService
     * @return $this
     */
    public function addNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService []= $networkClassOfService;
        return $this;
    }

    /**
     * Getter for defaultNetworkClassOfService
     *
     * @ElementName defaultNetworkClassOfService
     * @return \CWM\BroadWorksConnector\Ocip\Models\DefaultNetworkClassOfService|null
     */
    public function getDefaultNetworkClassOfService()
    {
        return $this->defaultNetworkClassOfService;
    }

    /**
     * Setter for defaultNetworkClassOfService
     *
     * @ElementName defaultNetworkClassOfService
     * @param \CWM\BroadWorksConnector\Ocip\Models\DefaultNetworkClassOfService|null $defaultNetworkClassOfService
     * @return $this
     */
    public function setDefaultNetworkClassOfService($defaultNetworkClassOfService)
    {
        $this->defaultNetworkClassOfService = $defaultNetworkClassOfService;
        return $this;
    }


}

