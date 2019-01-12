<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AccessDeviceMultipleIdentityAndContactEndpointModify22
 *
 * Access device end point used in the context of modify that can have more than one contact defined.
 *         The endpoint is identified by its linePort (public Identity) and possibly a private Identity.
 *         Only Static Registration capable devices may have more than one contact defined.
 *         Port numbers are only used by devices with static line ordering.
 *         The following elements are only used in XS data mode and ignored in AS data mode:
 *           privateIdentity
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:302","type":"sequence"}]
 */
class AccessDeviceMultipleIdentityAndContactEndpointModify22
{

    /**
     * @ElementName accessDevice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:302
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null
     */
    private $accessDevice = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:302
     * @var string|null
     */
    private $linePort = null;

    /**
     * @ElementName privateIdentity
     * @Type string
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:302
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $privateIdentity = null;

    /**
     * @ElementName contactList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList22
     * @Nillable
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:302
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList22|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $contactList = null;

    /**
     * @ElementName portNumber
     * @Type int
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:302
     * @var int|null
     */
    private $portNumber = null;

    /**
     * Getter for accessDevice
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     */
    public function getAccessDevice()
    {
        return $this->accessDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDevice;
    }

    /**
     * Setter for accessDevice
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice $accessDevice
     * @return $this
     */
    public function setAccessDevice(\CWM\BroadWorksConnector\Ocip\Models\AccessDevice $accessDevice)
    {
        $this->accessDevice = $accessDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDevice()
    {
        $this->accessDevice = null;
        return $this;
    }

    /**
     * Getter for linePort
     *
     * @return string
     */
    public function getLinePort()
    {
        return $this->linePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->linePort;
    }

    /**
     * Setter for linePort
     *
     * @param string $linePort
     * @return $this
     */
    public function setLinePort($linePort)
    {
        $this->linePort = $linePort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLinePort()
    {
        $this->linePort = null;
        return $this;
    }

    /**
     * Getter for privateIdentity
     *
     * @return string|null
     */
    public function getPrivateIdentity()
    {
        return $this->privateIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->privateIdentity;
    }

    /**
     * Setter for privateIdentity
     *
     * @param string|null $privateIdentity
     * @return $this
     */
    public function setPrivateIdentity($privateIdentity)
    {
        if ($privateIdentity === null) {
            $this->privateIdentity = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->privateIdentity = $privateIdentity;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrivateIdentity()
    {
        $this->privateIdentity = null;
        return $this;
    }

    /**
     * Getter for contactList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList22|null
     */
    public function getContactList()
    {
        return $this->contactList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contactList;
    }

    /**
     * Setter for contactList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList22|null $contactList
     * @return $this
     */
    public function setContactList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementContactList22 $contactList)
    {
        if ($contactList === null) {
            $this->contactList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->contactList = $contactList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContactList()
    {
        $this->contactList = null;
        return $this;
    }

    /**
     * Getter for portNumber
     *
     * @return int
     */
    public function getPortNumber()
    {
        return $this->portNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->portNumber;
    }

    /**
     * Setter for portNumber
     *
     * @param int $portNumber
     * @return $this
     */
    public function setPortNumber($portNumber)
    {
        $this->portNumber = $portNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPortNumber()
    {
        $this->portNumber = null;
        return $this;
    }


}
