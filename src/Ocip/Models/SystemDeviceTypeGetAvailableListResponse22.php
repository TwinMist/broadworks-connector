<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeGetAvailableListResponse22
 *
 * Response to SystemDeviceTypeGetAvailableListRequest22.
 *
 *         Note: element numberOfPorts is only used by devices types with static
 * line ordering enabled
 *
 * @see SystemDeviceTypeGetAvailableListRequest22
 */
class SystemDeviceTypeGetAvailableListResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceType
     * @var string[]
     */
    private $deviceType = array(
        
    );

    /**
     * @ElementName typeInfo
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponse22\TypeInfo[]
     */
    private $typeInfo = array(
        
    );

    /**
     * Getter for deviceType
     *
     * @ElementName deviceType
     * @return string[]
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @ElementName deviceType
     * @param string[] $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * Adder for deviceType
     *
     * @ElementName deviceType
     * @param string $deviceType
     * @return $this
     */
    public function addDeviceType($deviceType)
    {
        $this->deviceType []= $deviceType;
        return $this;
    }

    /**
     * Getter for typeInfo
     *
     * @ElementName typeInfo
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponse22\TypeInfo[]
     */
    public function getTypeInfo()
    {
        return $this->typeInfo;
    }

    /**
     * Setter for typeInfo
     *
     * @ElementName typeInfo
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponse22\TypeInfo[] $typeInfo
     * @return $this
     */
    public function setTypeInfo($typeInfo)
    {
        $this->typeInfo = $typeInfo;
        return $this;
    }

    /**
     * Adder for typeInfo
     *
     * @ElementName typeInfo
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemDeviceTypeGetAvailableListResponse22\TypeInfo $typeInfo
     * @return $this
     */
    public function addTypeInfo($typeInfo)
    {
        $this->typeInfo []= $typeInfo;
        return $this;
    }


}

