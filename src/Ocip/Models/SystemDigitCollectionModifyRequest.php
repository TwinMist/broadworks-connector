<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDigitCollectionModifyRequest
 *
 * Modifies the system's digit collection attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemDigitCollectionModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName accessCode
     * @var string|null
     */
    private $accessCode = null;

    /**
     * @ElementName publicDigitMap
     * @var string|null
     */
    private $publicDigitMap = null;

    /**
     * @ElementName privateDigitMap
     * @var string|null
     */
    private $privateDigitMap = null;

    /**
     * Getter for accessCode
     *
     * @ElementName accessCode
     * @return string|null
     */
    public function getAccessCode()
    {
        return $this->accessCode;
    }

    /**
     * Setter for accessCode
     *
     * @ElementName accessCode
     * @param string|null $accessCode
     * @return $this
     */
    public function setAccessCode($accessCode)
    {
        $this->accessCode = $accessCode;
        return $this;
    }

    /**
     * Getter for publicDigitMap
     *
     * @ElementName publicDigitMap
     * @return string|null
     */
    public function getPublicDigitMap()
    {
        return $this->publicDigitMap;
    }

    /**
     * Setter for publicDigitMap
     *
     * @ElementName publicDigitMap
     * @param string|null $publicDigitMap
     * @return $this
     */
    public function setPublicDigitMap($publicDigitMap)
    {
        $this->publicDigitMap = $publicDigitMap;
        return $this;
    }

    /**
     * Getter for privateDigitMap
     *
     * @ElementName privateDigitMap
     * @return string|null
     */
    public function getPrivateDigitMap()
    {
        return $this->privateDigitMap;
    }

    /**
     * Setter for privateDigitMap
     *
     * @ElementName privateDigitMap
     * @param string|null $privateDigitMap
     * @return $this
     */
    public function setPrivateDigitMap($privateDigitMap)
    {
        $this->privateDigitMap = $privateDigitMap;
        return $this;
    }


}

