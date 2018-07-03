<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSystemVoicePortalDeleteRequest
 *
 * Request to delete a system voice portal instance.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemSystemVoicePortalDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName systemVoicePortalId
     * @var string|null
     */
    private $systemVoicePortalId = null;

    /**
     * Getter for systemVoicePortalId
     *
     * @ElementName systemVoicePortalId
     * @return string|null
     */
    public function getSystemVoicePortalId()
    {
        return $this->systemVoicePortalId;
    }

    /**
     * Setter for systemVoicePortalId
     *
     * @ElementName systemVoicePortalId
     * @param string|null $systemVoicePortalId
     * @return $this
     */
    public function setSystemVoicePortalId($systemVoicePortalId)
    {
        $this->systemVoicePortalId = $systemVoicePortalId;
        return $this;
    }


}

