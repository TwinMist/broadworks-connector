<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetInstanceRequest20sp1
 *
 * Get a Trunk Group Instance's profile.
 *         The response is either a GroupTrunkGroupGetInstanceResponse20sp1 or an
 * ErrorResponse.
 *         The response contains a hosted user table with column headings: "User
 * Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name", "Phone
 * Number", "Extension", 
 *         "Department", "Email Address".
 *         
 *         Replaced by: GroupTrunkGroupGetInstanceRequest21
 *
 * @see GroupTrunkGroupGetInstanceResponse20sp1
 * @see ErrorResponse
 * @see GroupTrunkGroupGetInstanceRequest21
 */
class GroupTrunkGroupGetInstanceRequest20sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName trunkGroupKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    private $trunkGroupKey = null;

    /**
     * Getter for trunkGroupKey
     *
     * @ElementName trunkGroupKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    public function getTrunkGroupKey()
    {
        return $this->trunkGroupKey;
    }

    /**
     * Setter for trunkGroupKey
     *
     * @ElementName trunkGroupKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null $trunkGroupKey
     * @return $this
     */
    public function setTrunkGroupKey($trunkGroupKey)
    {
        $this->trunkGroupKey = $trunkGroupKey;
        return $this;
    }


}

