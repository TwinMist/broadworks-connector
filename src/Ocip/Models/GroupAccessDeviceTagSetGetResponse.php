<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceTagSetGetResponse
 *
 * Response to GroupAccessDeviceTagSetGetRequest.
 *         The response includes a tag set name defined in the access device.
 *
 * @see GroupAccessDeviceTagSetGetRequest
 */
class GroupAccessDeviceTagSetGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName tagSetName
     * @var string|null
     */
    private $tagSetName = null;

    /**
     * Getter for tagSetName
     *
     * @ElementName tagSetName
     * @return string|null
     */
    public function getTagSetName()
    {
        return $this->tagSetName;
    }

    /**
     * Setter for tagSetName
     *
     * @ElementName tagSetName
     * @param string|null $tagSetName
     * @return $this
     */
    public function setTagSetName($tagSetName)
    {
        $this->tagSetName = $tagSetName;
        return $this;
    }


}

