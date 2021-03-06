<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerGetResponse
 *
 * Response to the ResellerGetRequest.
 *
 * @see ResellerGetRequest
 * @Groups [{"id":"b009175f2a2a9d38115e319a6ad64d7f:383","type":"sequence"}]
 */
class ResellerGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName resellerName
     * @Type string
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:383
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $resellerName = null;

    /**
     * Getter for resellerName
     *
     * @return string
     */
    public function getResellerName()
    {
        return $this->resellerName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerName;
    }

    /**
     * Setter for resellerName
     *
     * @param string $resellerName
     * @return $this
     */
    public function setResellerName($resellerName)
    {
        $this->resellerName = $resellerName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerName()
    {
        $this->resellerName = null;
        return $this;
    }


}

