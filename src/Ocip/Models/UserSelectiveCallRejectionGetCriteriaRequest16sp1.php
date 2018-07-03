<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSelectiveCallRejectionGetCriteriaRequest16sp1
 *
 * Get a criteria for the user's selective call rejection service.
 *         The response is either a
 * UserSelectiveCallRejectionGetCriteriaResponse16sp1 or an ErrorResponse.
 *         Replaced by: UserSelectiveCallRejectionGetCriteriaRequest21 in AS data
 * mode
 *
 * @see UserSelectiveCallRejectionGetCriteriaResponse16sp1
 * @see ErrorResponse
 * @see UserSelectiveCallRejectionGetCriteriaRequest21
 */
class UserSelectiveCallRejectionGetCriteriaRequest16sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName criteriaName
     * @var string|null
     */
    private $criteriaName = null;

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

    /**
     * Getter for criteriaName
     *
     * @ElementName criteriaName
     * @return string|null
     */
    public function getCriteriaName()
    {
        return $this->criteriaName;
    }

    /**
     * Setter for criteriaName
     *
     * @ElementName criteriaName
     * @param string|null $criteriaName
     * @return $this
     */
    public function setCriteriaName($criteriaName)
    {
        $this->criteriaName = $criteriaName;
        return $this;
    }


}

