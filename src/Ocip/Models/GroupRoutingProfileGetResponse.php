<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutingProfileGetResponse
 *
 * Response to GroupRoutingProfileGetRequest.
 *
 * @see GroupRoutingProfileGetRequest
 */
class GroupRoutingProfileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routingProfile
     * @var string|null
     */
    private $routingProfile = null;

    /**
     * Getter for routingProfile
     *
     * @ElementName routingProfile
     * @return string|null
     */
    public function getRoutingProfile()
    {
        return $this->routingProfile;
    }

    /**
     * Setter for routingProfile
     *
     * @ElementName routingProfile
     * @param string|null $routingProfile
     * @return $this
     */
    public function setRoutingProfile($routingProfile)
    {
        $this->routingProfile = $routingProfile;
        return $this;
    }


}

