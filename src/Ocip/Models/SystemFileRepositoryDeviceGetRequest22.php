<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileRepositoryDeviceGetRequest22
 *
 * Request to get the file repository information.  The response is either SystemFileRepositoryDeviceGetResponse22 or ErrorResponse.
 *
 * @see SystemFileRepositoryDeviceGetResponse22
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:8910","type":"sequence"}]
 */
class SystemFileRepositoryDeviceGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8910
     * @var string|null
     */
    private $name = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }


}
