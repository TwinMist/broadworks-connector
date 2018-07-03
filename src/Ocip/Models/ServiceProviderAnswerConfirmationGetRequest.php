<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAnswerConfirmationGetRequest
 *
 * Get a service provider or enterprise's answer confirmation settings.
 *         The response is either a ServiceProviderAnswerConfirmationGetResponse or
 * an ErrorResponse.
 *         Replaced By: ServiceProviderAnswerConfirmationGetRequest16
 *
 * @see ServiceProviderAnswerConfirmationGetResponse
 * @see ErrorResponse
 * @see ServiceProviderAnswerConfirmationGetRequest16
 */
class ServiceProviderAnswerConfirmationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

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


}

