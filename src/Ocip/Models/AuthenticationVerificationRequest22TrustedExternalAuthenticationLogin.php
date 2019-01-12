<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AuthenticationVerificationRequest22TrustedExternalAuthenticationLogin
 *
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:3916","type":"sequence"}]
 */
class AuthenticationVerificationRequest22TrustedExternalAuthenticationLogin
{

    /**
     * @ElementName userId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:3916
     * @var string|null
     */
    private $userId = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }


}
