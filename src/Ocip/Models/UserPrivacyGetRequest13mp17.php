<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPrivacyGetRequest13mp17
 *
 * Request the user level data associated with Privacy.
 *         This command is supported for regular users only.
 *         The response is either a UserPrivacyGetResponse13mp17
 *         or an ErrorResponse.
 *
 * @see UserPrivacyGetResponse13
 * @see ErrorResponse
 */
class UserPrivacyGetRequest13mp17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

