<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityGetResponse22
 *
 * The response to a SystemBroadWorksMobilityGetRequest22.
 */
class SystemBroadWorksMobilityGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableLocationServices
     * @var bool|null
     */
    private $enableLocationServices = null;

    /**
     * @ElementName enableMSRNLookup
     * @var bool|null
     */
    private $enableMSRNLookup = null;

    /**
     * @ElementName enableMobileStateChecking
     * @var bool|null
     */
    private $enableMobileStateChecking = null;

    /**
     * @ElementName denyCallOriginations
     * @var bool|null
     */
    private $denyCallOriginations = null;

    /**
     * @ElementName denyCallTerminations
     * @var bool|null
     */
    private $denyCallTerminations = null;

    /**
     * @ElementName imrnTimeoutMillisecnds
     * @var int|null
     */
    private $imrnTimeoutMillisecnds = null;

    /**
     * @ElementName enableInternalCLIDDelivery
     * @var bool|null
     */
    private $enableInternalCLIDDelivery = null;

    /**
     * @ElementName includeRedirectForMobilityTermination
     * @var bool|null
     */
    private $includeRedirectForMobilityTermination = null;

    /**
     * Getter for enableLocationServices
     *
     * @ElementName enableLocationServices
     * @return bool|null
     */
    public function getEnableLocationServices()
    {
        return $this->enableLocationServices;
    }

    /**
     * Setter for enableLocationServices
     *
     * @ElementName enableLocationServices
     * @param bool|null $enableLocationServices
     * @return $this
     */
    public function setEnableLocationServices($enableLocationServices)
    {
        $this->enableLocationServices = $enableLocationServices;
        return $this;
    }

    /**
     * Getter for enableMSRNLookup
     *
     * @ElementName enableMSRNLookup
     * @return bool|null
     */
    public function getEnableMSRNLookup()
    {
        return $this->enableMSRNLookup;
    }

    /**
     * Setter for enableMSRNLookup
     *
     * @ElementName enableMSRNLookup
     * @param bool|null $enableMSRNLookup
     * @return $this
     */
    public function setEnableMSRNLookup($enableMSRNLookup)
    {
        $this->enableMSRNLookup = $enableMSRNLookup;
        return $this;
    }

    /**
     * Getter for enableMobileStateChecking
     *
     * @ElementName enableMobileStateChecking
     * @return bool|null
     */
    public function getEnableMobileStateChecking()
    {
        return $this->enableMobileStateChecking;
    }

    /**
     * Setter for enableMobileStateChecking
     *
     * @ElementName enableMobileStateChecking
     * @param bool|null $enableMobileStateChecking
     * @return $this
     */
    public function setEnableMobileStateChecking($enableMobileStateChecking)
    {
        $this->enableMobileStateChecking = $enableMobileStateChecking;
        return $this;
    }

    /**
     * Getter for denyCallOriginations
     *
     * @ElementName denyCallOriginations
     * @return bool|null
     */
    public function getDenyCallOriginations()
    {
        return $this->denyCallOriginations;
    }

    /**
     * Setter for denyCallOriginations
     *
     * @ElementName denyCallOriginations
     * @param bool|null $denyCallOriginations
     * @return $this
     */
    public function setDenyCallOriginations($denyCallOriginations)
    {
        $this->denyCallOriginations = $denyCallOriginations;
        return $this;
    }

    /**
     * Getter for denyCallTerminations
     *
     * @ElementName denyCallTerminations
     * @return bool|null
     */
    public function getDenyCallTerminations()
    {
        return $this->denyCallTerminations;
    }

    /**
     * Setter for denyCallTerminations
     *
     * @ElementName denyCallTerminations
     * @param bool|null $denyCallTerminations
     * @return $this
     */
    public function setDenyCallTerminations($denyCallTerminations)
    {
        $this->denyCallTerminations = $denyCallTerminations;
        return $this;
    }

    /**
     * Getter for imrnTimeoutMillisecnds
     *
     * @ElementName imrnTimeoutMillisecnds
     * @return int|null
     */
    public function getImrnTimeoutMillisecnds()
    {
        return $this->imrnTimeoutMillisecnds;
    }

    /**
     * Setter for imrnTimeoutMillisecnds
     *
     * @ElementName imrnTimeoutMillisecnds
     * @param int|null $imrnTimeoutMillisecnds
     * @return $this
     */
    public function setImrnTimeoutMillisecnds($imrnTimeoutMillisecnds)
    {
        $this->imrnTimeoutMillisecnds = $imrnTimeoutMillisecnds;
        return $this;
    }

    /**
     * Getter for enableInternalCLIDDelivery
     *
     * @ElementName enableInternalCLIDDelivery
     * @return bool|null
     */
    public function getEnableInternalCLIDDelivery()
    {
        return $this->enableInternalCLIDDelivery;
    }

    /**
     * Setter for enableInternalCLIDDelivery
     *
     * @ElementName enableInternalCLIDDelivery
     * @param bool|null $enableInternalCLIDDelivery
     * @return $this
     */
    public function setEnableInternalCLIDDelivery($enableInternalCLIDDelivery)
    {
        $this->enableInternalCLIDDelivery = $enableInternalCLIDDelivery;
        return $this;
    }

    /**
     * Getter for includeRedirectForMobilityTermination
     *
     * @ElementName includeRedirectForMobilityTermination
     * @return bool|null
     */
    public function getIncludeRedirectForMobilityTermination()
    {
        return $this->includeRedirectForMobilityTermination;
    }

    /**
     * Setter for includeRedirectForMobilityTermination
     *
     * @ElementName includeRedirectForMobilityTermination
     * @param bool|null $includeRedirectForMobilityTermination
     * @return $this
     */
    public function setIncludeRedirectForMobilityTermination($includeRedirectForMobilityTermination)
    {
        $this->includeRedirectForMobilityTermination = $includeRedirectForMobilityTermination;
        return $this;
    }


}

