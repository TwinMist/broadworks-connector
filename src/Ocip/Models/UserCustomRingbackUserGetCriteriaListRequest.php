<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCustomRingbackUserGetCriteriaListRequest
 *
 * Get the user's custom ringback service criteria listing.
 *         The response is either a UserCustomRingbackUserGetCriteriaListResponse
 * or an ErrorResponse.
 *
 * @see UserCustomRingbackUserGetCriteriaListResponse
 * @see ErrorResponse
 */
class UserCustomRingbackUserGetCriteriaListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

