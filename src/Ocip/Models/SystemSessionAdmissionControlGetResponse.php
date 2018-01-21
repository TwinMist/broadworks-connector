<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSessionAdmissionControlGetResponse
 *
 * Response to the SystemSessionAdmissionControlGetRequest.
 *         The response contains the session admission control settings for the
 * system.
 *         
 *         Replaced by: SystemSessionAdmissionControlGetResponse21sp1.
 */
class SystemSessionAdmissionControlGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName countLongConnectionsToMediaServer
     * @var bool|null
     */
    private $countLongConnectionsToMediaServer = null;

    /**
     * @ElementName sacHandlingForMoH
     * @var string|null
     */
    private $sacHandlingForMoH = null;

    /**
     * @ElementName blockVMDepositDueToSACLimits
     * @var bool|null
     */
    private $blockVMDepositDueToSACLimits = null;

    /**
     * Getter for countLongConnectionsToMediaServer
     *
     * @ElementName countLongConnectionsToMediaServer
     * @return bool|null
     */
    public function getCountLongConnectionsToMediaServer()
    {
        return $this->countLongConnectionsToMediaServer;
    }

    /**
     * Setter for countLongConnectionsToMediaServer
     *
     * @ElementName countLongConnectionsToMediaServer
     * @param bool|null $countLongConnectionsToMediaServer
     * @return $this
     */
    public function setCountLongConnectionsToMediaServer($countLongConnectionsToMediaServer)
    {
        $this->countLongConnectionsToMediaServer = $countLongConnectionsToMediaServer;
        return $this;
    }

    /**
     * Getter for sacHandlingForMoH
     *
     * @ElementName sacHandlingForMoH
     * @return string|null
     */
    public function getSacHandlingForMoH()
    {
        return $this->sacHandlingForMoH;
    }

    /**
     * Setter for sacHandlingForMoH
     *
     * @ElementName sacHandlingForMoH
     * @param string|null $sacHandlingForMoH
     * @return $this
     */
    public function setSacHandlingForMoH($sacHandlingForMoH)
    {
        $this->sacHandlingForMoH = $sacHandlingForMoH;
        return $this;
    }

    /**
     * Getter for blockVMDepositDueToSACLimits
     *
     * @ElementName blockVMDepositDueToSACLimits
     * @return bool|null
     */
    public function getBlockVMDepositDueToSACLimits()
    {
        return $this->blockVMDepositDueToSACLimits;
    }

    /**
     * Setter for blockVMDepositDueToSACLimits
     *
     * @ElementName blockVMDepositDueToSACLimits
     * @param bool|null $blockVMDepositDueToSACLimits
     * @return $this
     */
    public function setBlockVMDepositDueToSACLimits($blockVMDepositDueToSACLimits)
    {
        $this->blockVMDepositDueToSACLimits = $blockVMDepositDueToSACLimits;
        return $this;
    }


}

