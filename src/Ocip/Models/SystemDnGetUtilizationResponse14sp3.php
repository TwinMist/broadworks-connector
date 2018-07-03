<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDnGetUtilizationResponse14sp3
 *
 * Response to SystemDnGetUtilizationRequest14sp3.
 *         The isActivated element is only included when the DN is
 *   assigned to a user.
 *
 * @see SystemDnGetUtilizationRequest14sp3
 */
class SystemDnGetUtilizationResponse14sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName userType
     * @var string|null
     */
    private $userType = null;

    /**
     * @ElementName isGroupCallingLineId
     * @var bool|null
     */
    private $isGroupCallingLineId = null;

    /**
     * @ElementName isActivated
     * @var bool|null
     */
    private $isActivated = null;

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

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

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
     * Getter for userType
     *
     * @ElementName userType
     * @return string|null
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Setter for userType
     *
     * @ElementName userType
     * @param string|null $userType
     * @return $this
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
        return $this;
    }

    /**
     * Getter for isGroupCallingLineId
     *
     * @ElementName isGroupCallingLineId
     * @return bool|null
     */
    public function getIsGroupCallingLineId()
    {
        return $this->isGroupCallingLineId;
    }

    /**
     * Setter for isGroupCallingLineId
     *
     * @ElementName isGroupCallingLineId
     * @param bool|null $isGroupCallingLineId
     * @return $this
     */
    public function setIsGroupCallingLineId($isGroupCallingLineId)
    {
        $this->isGroupCallingLineId = $isGroupCallingLineId;
        return $this;
    }

    /**
     * Getter for isActivated
     *
     * @ElementName isActivated
     * @return bool|null
     */
    public function getIsActivated()
    {
        return $this->isActivated;
    }

    /**
     * Setter for isActivated
     *
     * @ElementName isActivated
     * @param bool|null $isActivated
     * @return $this
     */
    public function setIsActivated($isActivated)
    {
        $this->isActivated = $isActivated;
        return $this;
    }


}

