<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingNetworkSIPStatusDeleteRequest
 *
 * Delete a Network SIP Status Code mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemTreatmentMappingNetworkSIPStatusDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName sipStatusCode
     * @var int|null
     */
    private $sipStatusCode = null;

    /**
     * Getter for sipStatusCode
     *
     * @ElementName sipStatusCode
     * @return int|null
     */
    public function getSipStatusCode()
    {
        return $this->sipStatusCode;
    }

    /**
     * Setter for sipStatusCode
     *
     * @ElementName sipStatusCode
     * @param int|null $sipStatusCode
     * @return $this
     */
    public function setSipStatusCode($sipStatusCode)
    {
        $this->sipStatusCode = $sipStatusCode;
        return $this;
    }


}

