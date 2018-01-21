<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetRequest21
 *
 * Request to get the user information.  The response is either 
 *         UserGetResponse21 or ErrorResponse.
 *         
 *         Replaced by UserGetRequest21sp1 in AS data mode
 */
class UserGetRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

