<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterCallDispositionCodeGetUsageListRequest
 *
 * Get the list of Call Centers and Route Points using the specified disposition code.
 *         The response is either GroupCallCenterCallDispositionCodeGetUsageListResponse or ErrorResponse.
 *
 * @see GroupCallCenterCallDispositionCodeGetUsageListResponse
 * @see ErrorResponse
 * @Groups [{"id":"69c2aeb1186dc97a4f4c36d9609ddb49:2564","type":"sequence"}]
 */
class GroupCallCenterCallDispositionCodeGetUsageListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2564
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2564
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName code
     * @Type string
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:2564
     * @var string|null
     */
    private $code = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->code;
    }

    /**
     * Setter for code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCode()
    {
        $this->code = null;
        return $this;
    }


}

