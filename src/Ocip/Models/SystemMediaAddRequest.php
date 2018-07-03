<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaAddRequest
 *
 * Request to add a Media to the system.
 *             The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemMediaAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName mediaName
     * @var string|null
     */
    private $mediaName = null;

    /**
     * @ElementName codecName
     * @var string|null
     */
    private $codecName = null;

    /**
     * @ElementName mediaType
     * @var string|null
     */
    private $mediaType = null;

    /**
     * @ElementName bandwidthEnforcementType
     * @var string|null
     */
    private $bandwidthEnforcementType = null;

    /**
     * @ElementName mediaBandwidth
     * @var int|null
     */
    private $mediaBandwidth = null;

    /**
     * Getter for mediaName
     *
     * @ElementName mediaName
     * @return string|null
     */
    public function getMediaName()
    {
        return $this->mediaName;
    }

    /**
     * Setter for mediaName
     *
     * @ElementName mediaName
     * @param string|null $mediaName
     * @return $this
     */
    public function setMediaName($mediaName)
    {
        $this->mediaName = $mediaName;
        return $this;
    }

    /**
     * Getter for codecName
     *
     * @ElementName codecName
     * @return string|null
     */
    public function getCodecName()
    {
        return $this->codecName;
    }

    /**
     * Setter for codecName
     *
     * @ElementName codecName
     * @param string|null $codecName
     * @return $this
     */
    public function setCodecName($codecName)
    {
        $this->codecName = $codecName;
        return $this;
    }

    /**
     * Getter for mediaType
     *
     * @ElementName mediaType
     * @return string|null
     */
    public function getMediaType()
    {
        return $this->mediaType;
    }

    /**
     * Setter for mediaType
     *
     * @ElementName mediaType
     * @param string|null $mediaType
     * @return $this
     */
    public function setMediaType($mediaType)
    {
        $this->mediaType = $mediaType;
        return $this;
    }

    /**
     * Getter for bandwidthEnforcementType
     *
     * @ElementName bandwidthEnforcementType
     * @return string|null
     */
    public function getBandwidthEnforcementType()
    {
        return $this->bandwidthEnforcementType;
    }

    /**
     * Setter for bandwidthEnforcementType
     *
     * @ElementName bandwidthEnforcementType
     * @param string|null $bandwidthEnforcementType
     * @return $this
     */
    public function setBandwidthEnforcementType($bandwidthEnforcementType)
    {
        $this->bandwidthEnforcementType = $bandwidthEnforcementType;
        return $this;
    }

    /**
     * Getter for mediaBandwidth
     *
     * @ElementName mediaBandwidth
     * @return int|null
     */
    public function getMediaBandwidth()
    {
        return $this->mediaBandwidth;
    }

    /**
     * Setter for mediaBandwidth
     *
     * @ElementName mediaBandwidth
     * @param int|null $mediaBandwidth
     * @return $this
     */
    public function setMediaBandwidth($mediaBandwidth)
    {
        $this->mediaBandwidth = $mediaBandwidth;
        return $this;
    }


}

