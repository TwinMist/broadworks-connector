<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDomainGetAssignedListRequest22
 *
 * Requests the list of all matching domains assigned to a service provider .
 *         The response is either ServiceProviderDomainGetAssignedListResponse22 or ErrorResponse.
 *
 *         The following elements are only used in AS data mode and will be ignored in XS data mode:
 *           responseSizeLimit
 *           searchCriteriaDomainName
 *
 * @see ServiceProviderDomainGetAssignedListResponse22
 * @see ErrorResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:3330","type":"sequence"}]
 */
class ServiceProviderDomainGetAssignedListRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3330
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3330
     * @MinInclusive 1
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaDomainName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDomainName
     * @Array
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3330
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDomainName[]
     */
    private $searchCriteriaDomainName = array(
        
    );

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
     * Getter for responseSizeLimit
     *
     * @return int
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->responseSizeLimit;
    }

    /**
     * Setter for responseSizeLimit
     *
     * @param int $responseSizeLimit
     * @return $this
     */
    public function setResponseSizeLimit($responseSizeLimit)
    {
        $this->responseSizeLimit = $responseSizeLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResponseSizeLimit()
    {
        $this->responseSizeLimit = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaDomainName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDomainName[]
     */
    public function getSearchCriteriaDomainName()
    {
        return $this->searchCriteriaDomainName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaDomainName;
    }

    /**
     * Setter for searchCriteriaDomainName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDomainName[] $searchCriteriaDomainName
     * @return $this
     */
    public function setSearchCriteriaDomainName(array $searchCriteriaDomainName)
    {
        $this->searchCriteriaDomainName = $searchCriteriaDomainName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaDomainName()
    {
        $this->searchCriteriaDomainName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaDomainName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDomainName $searchCriteriaDomainName
     * @return $this
     */
    public function addSearchCriteriaDomainName($searchCriteriaDomainName)
    {
        $this->searchCriteriaDomainName[] = $searchCriteriaDomainName;
        return $this;
    }


}

