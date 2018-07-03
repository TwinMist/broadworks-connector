<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallForwardingAlwaysSecondaryGetRequest
 *
 * Request the user level data associated with Call Forwarding Always Secondary
 * service.
 *         The response is either a UserCallForwardingAlwaysSecondaryGetResponse or
 * an
 *         ErrorResponse.
 *
 * @see UserCallForwardingAlwaysSecondaryGetResponse
 * @see ErrorResponse
 */
class UserCallForwardingAlwaysSecondaryGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }


}

