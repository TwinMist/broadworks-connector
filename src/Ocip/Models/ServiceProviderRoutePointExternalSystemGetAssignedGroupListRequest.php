<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRoutePointExternalSystemGetAssignedGroupListRequest
 *
 * Requests a list of groups within a service provider that have a given external
 * system assigned.
 *         It is possible to search by various criteria to restrict the number of
 * rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a
 * ServiceProviderRoutePointExternalSystemGetAssignedGroupListResponse or an
 * ErrorResponse.
 *
 * @see ServiceProviderRoutePointExternalSystemGetAssignedGroupListResponse
 * @see ErrorResponse
 */
class ServiceProviderRoutePointExternalSystemGetAssignedGroupListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName externalSystem
     * @var string|null
     */
    private $externalSystem = null;

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaGroupId
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    private $searchCriteriaGroupId = array(
        
    );

    /**
     * @ElementName searchCriteriaGroupName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupName[]
     */
    private $searchCriteriaGroupName = array(
        
    );

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
     * Getter for externalSystem
     *
     * @ElementName externalSystem
     * @return string|null
     */
    public function getExternalSystem()
    {
        return $this->externalSystem;
    }

    /**
     * Setter for externalSystem
     *
     * @ElementName externalSystem
     * @param string|null $externalSystem
     * @return $this
     */
    public function setExternalSystem($externalSystem)
    {
        $this->externalSystem = $externalSystem;
        return $this;
    }

    /**
     * Getter for responseSizeLimit
     *
     * @ElementName responseSizeLimit
     * @return int|null
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit;
    }

    /**
     * Setter for responseSizeLimit
     *
     * @ElementName responseSizeLimit
     * @param int|null $responseSizeLimit
     * @return $this
     */
    public function setResponseSizeLimit($responseSizeLimit)
    {
        $this->responseSizeLimit = $responseSizeLimit;
        return $this;
    }

    /**
     * Getter for searchCriteriaGroupId
     *
     * @ElementName searchCriteriaGroupId
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    public function getSearchCriteriaGroupId()
    {
        return $this->searchCriteriaGroupId;
    }

    /**
     * Setter for searchCriteriaGroupId
     *
     * @ElementName searchCriteriaGroupId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[] $searchCriteriaGroupId
     * @return $this
     */
    public function setSearchCriteriaGroupId($searchCriteriaGroupId)
    {
        $this->searchCriteriaGroupId = $searchCriteriaGroupId;
        return $this;
    }

    /**
     * Adder for searchCriteriaGroupId
     *
     * @ElementName searchCriteriaGroupId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId $searchCriteriaGroupId
     * @return $this
     */
    public function addSearchCriteriaGroupId($searchCriteriaGroupId)
    {
        $this->searchCriteriaGroupId []= $searchCriteriaGroupId;
        return $this;
    }

    /**
     * Getter for searchCriteriaGroupName
     *
     * @ElementName searchCriteriaGroupName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupName[]
     */
    public function getSearchCriteriaGroupName()
    {
        return $this->searchCriteriaGroupName;
    }

    /**
     * Setter for searchCriteriaGroupName
     *
     * @ElementName searchCriteriaGroupName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupName[] $searchCriteriaGroupName
     * @return $this
     */
    public function setSearchCriteriaGroupName($searchCriteriaGroupName)
    {
        $this->searchCriteriaGroupName = $searchCriteriaGroupName;
        return $this;
    }

    /**
     * Adder for searchCriteriaGroupName
     *
     * @ElementName searchCriteriaGroupName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupName $searchCriteriaGroupName
     * @return $this
     */
    public function addSearchCriteriaGroupName($searchCriteriaGroupName)
    {
        $this->searchCriteriaGroupName []= $searchCriteriaGroupName;
        return $this;
    }


}

