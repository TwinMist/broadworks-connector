<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantGetResponse
 *
 * Response to the UserPersonalAssistantGetRequest.
 *         The response contains the user Personal Assistant information".
 *
 * @see UserPersonalAssistantGetRequest
 */
class UserPersonalAssistantGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName presence
     * @var string|null
     */
    private $presence = null;

    /**
     * @ElementName enableTransferToAttendant
     * @var bool|null
     */
    private $enableTransferToAttendant = null;

    /**
     * @ElementName attendantNumber
     * @var string|null
     */
    private $attendantNumber = null;

    /**
     * @ElementName enableRingSplash
     * @var bool|null
     */
    private $enableRingSplash = null;

    /**
     * @ElementName enableExpirationTime
     * @var bool|null
     */
    private $enableExpirationTime = null;

    /**
     * @ElementName expirationTime
     * @var string|null
     */
    private $expirationTime = null;

    /**
     * Getter for presence
     *
     * @ElementName presence
     * @return string|null
     */
    public function getPresence()
    {
        return $this->presence;
    }

    /**
     * Setter for presence
     *
     * @ElementName presence
     * @param string|null $presence
     * @return $this
     */
    public function setPresence($presence)
    {
        $this->presence = $presence;
        return $this;
    }

    /**
     * Getter for enableTransferToAttendant
     *
     * @ElementName enableTransferToAttendant
     * @return bool|null
     */
    public function getEnableTransferToAttendant()
    {
        return $this->enableTransferToAttendant;
    }

    /**
     * Setter for enableTransferToAttendant
     *
     * @ElementName enableTransferToAttendant
     * @param bool|null $enableTransferToAttendant
     * @return $this
     */
    public function setEnableTransferToAttendant($enableTransferToAttendant)
    {
        $this->enableTransferToAttendant = $enableTransferToAttendant;
        return $this;
    }

    /**
     * Getter for attendantNumber
     *
     * @ElementName attendantNumber
     * @return string|null
     */
    public function getAttendantNumber()
    {
        return $this->attendantNumber;
    }

    /**
     * Setter for attendantNumber
     *
     * @ElementName attendantNumber
     * @param string|null $attendantNumber
     * @return $this
     */
    public function setAttendantNumber($attendantNumber)
    {
        $this->attendantNumber = $attendantNumber;
        return $this;
    }

    /**
     * Getter for enableRingSplash
     *
     * @ElementName enableRingSplash
     * @return bool|null
     */
    public function getEnableRingSplash()
    {
        return $this->enableRingSplash;
    }

    /**
     * Setter for enableRingSplash
     *
     * @ElementName enableRingSplash
     * @param bool|null $enableRingSplash
     * @return $this
     */
    public function setEnableRingSplash($enableRingSplash)
    {
        $this->enableRingSplash = $enableRingSplash;
        return $this;
    }

    /**
     * Getter for enableExpirationTime
     *
     * @ElementName enableExpirationTime
     * @return bool|null
     */
    public function getEnableExpirationTime()
    {
        return $this->enableExpirationTime;
    }

    /**
     * Setter for enableExpirationTime
     *
     * @ElementName enableExpirationTime
     * @param bool|null $enableExpirationTime
     * @return $this
     */
    public function setEnableExpirationTime($enableExpirationTime)
    {
        $this->enableExpirationTime = $enableExpirationTime;
        return $this;
    }

    /**
     * Getter for expirationTime
     *
     * @ElementName expirationTime
     * @return string|null
     */
    public function getExpirationTime()
    {
        return $this->expirationTime;
    }

    /**
     * Setter for expirationTime
     *
     * @ElementName expirationTime
     * @param string|null $expirationTime
     * @return $this
     */
    public function setExpirationTime($expirationTime)
    {
        $this->expirationTime = $expirationTime;
        return $this;
    }


}

