<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse18VoicePortalLoginMenuKeys
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse18VoicePortalLoginMenuKeys
{

    /**
     * @ElementName accessUsingOtherMailboxId
     * @var string|null
     */
    private $accessUsingOtherMailboxId = null;

    /**
     * Getter for accessUsingOtherMailboxId
     *
     * @ElementName accessUsingOtherMailboxId
     * @return string|null
     */
    public function getAccessUsingOtherMailboxId()
    {
        return $this->accessUsingOtherMailboxId;
    }

    /**
     * Setter for accessUsingOtherMailboxId
     *
     * @ElementName accessUsingOtherMailboxId
     * @param string|null $accessUsingOtherMailboxId
     * @return $this
     */
    public function setAccessUsingOtherMailboxId($accessUsingOtherMailboxId)
    {
        $this->accessUsingOtherMailboxId = $accessUsingOtherMailboxId;
        return $this;
    }


}
