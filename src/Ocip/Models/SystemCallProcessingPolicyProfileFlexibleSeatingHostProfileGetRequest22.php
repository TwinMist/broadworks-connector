<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileFlexibleSeatingHostProfileGetRequest22
 *
 * Request to get the configuration for a call processing policy profile Flexible
 * Seating Host subscriber type profile.
 *         The response is either a
 * SystemCallProcessingPolicyProfileFlexibleSeatingHostProfileGetResponse or an
 *         ErrorResponse.
 *
 * @see SystemCallProcessingPolicyProfileFlexibleSeatingHostProfileGetResponse
 * @see ErrorResponse
 */
class SystemCallProcessingPolicyProfileFlexibleSeatingHostProfileGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName callProcessingPolicyProfileName
     * @var string|null
     */
    private $callProcessingPolicyProfileName = null;

    /**
     * Getter for callProcessingPolicyProfileName
     *
     * @ElementName callProcessingPolicyProfileName
     * @return string|null
     */
    public function getCallProcessingPolicyProfileName()
    {
        return $this->callProcessingPolicyProfileName;
    }

    /**
     * Setter for callProcessingPolicyProfileName
     *
     * @ElementName callProcessingPolicyProfileName
     * @param string|null $callProcessingPolicyProfileName
     * @return $this
     */
    public function setCallProcessingPolicyProfileName($callProcessingPolicyProfileName)
    {
        $this->callProcessingPolicyProfileName = $callProcessingPolicyProfileName;
        return $this;
    }


}

