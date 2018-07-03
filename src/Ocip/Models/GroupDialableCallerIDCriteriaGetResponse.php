<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDialableCallerIDCriteriaGetResponse
 *
 * Response to the GroupDialableCallerIDCriteriaGetRequest.
 *         The response contains the Dialable Caller ID Criteria information.
 *
 * @see GroupDialableCallerIDCriteriaGetRequest
 */
class GroupDialableCallerIDCriteriaGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName prefixDigits
     * @var string|null
     */
    private $prefixDigits = null;

    /**
     * @ElementName matchCallType
     * @var string[]
     */
    private $matchCallType = array(
        
    );

    /**
     * @ElementName matchAlternateCallIndicator
     * @var string[]
     */
    private $matchAlternateCallIndicator = array(
        
    );

    /**
     * @ElementName matchLocalCategory
     * @var bool|null
     */
    private $matchLocalCategory = null;

    /**
     * @ElementName matchNationalCategory
     * @var bool|null
     */
    private $matchNationalCategory = null;

    /**
     * @ElementName matchInterlataCategory
     * @var bool|null
     */
    private $matchInterlataCategory = null;

    /**
     * @ElementName matchIntralataCategory
     * @var bool|null
     */
    private $matchIntralataCategory = null;

    /**
     * @ElementName matchInternationalCategory
     * @var bool|null
     */
    private $matchInternationalCategory = null;

    /**
     * @ElementName matchPrivateCategory
     * @var bool|null
     */
    private $matchPrivateCategory = null;

    /**
     * @ElementName matchEmergencyCategory
     * @var bool|null
     */
    private $matchEmergencyCategory = null;

    /**
     * @ElementName matchOtherCategory
     * @var bool|null
     */
    private $matchOtherCategory = null;

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Getter for prefixDigits
     *
     * @ElementName prefixDigits
     * @return string|null
     */
    public function getPrefixDigits()
    {
        return $this->prefixDigits;
    }

    /**
     * Setter for prefixDigits
     *
     * @ElementName prefixDigits
     * @param string|null $prefixDigits
     * @return $this
     */
    public function setPrefixDigits($prefixDigits)
    {
        $this->prefixDigits = $prefixDigits;
        return $this;
    }

    /**
     * Getter for matchCallType
     *
     * @ElementName matchCallType
     * @return string[]
     */
    public function getMatchCallType()
    {
        return $this->matchCallType;
    }

    /**
     * Setter for matchCallType
     *
     * @ElementName matchCallType
     * @param string[] $matchCallType
     * @return $this
     */
    public function setMatchCallType($matchCallType)
    {
        $this->matchCallType = $matchCallType;
        return $this;
    }

    /**
     * Adder for matchCallType
     *
     * @ElementName matchCallType
     * @param string $matchCallType
     * @return $this
     */
    public function addMatchCallType($matchCallType)
    {
        $this->matchCallType []= $matchCallType;
        return $this;
    }

    /**
     * Getter for matchAlternateCallIndicator
     *
     * @ElementName matchAlternateCallIndicator
     * @return string[]
     */
    public function getMatchAlternateCallIndicator()
    {
        return $this->matchAlternateCallIndicator;
    }

    /**
     * Setter for matchAlternateCallIndicator
     *
     * @ElementName matchAlternateCallIndicator
     * @param string[] $matchAlternateCallIndicator
     * @return $this
     */
    public function setMatchAlternateCallIndicator($matchAlternateCallIndicator)
    {
        $this->matchAlternateCallIndicator = $matchAlternateCallIndicator;
        return $this;
    }

    /**
     * Adder for matchAlternateCallIndicator
     *
     * @ElementName matchAlternateCallIndicator
     * @param string $matchAlternateCallIndicator
     * @return $this
     */
    public function addMatchAlternateCallIndicator($matchAlternateCallIndicator)
    {
        $this->matchAlternateCallIndicator []= $matchAlternateCallIndicator;
        return $this;
    }

    /**
     * Getter for matchLocalCategory
     *
     * @ElementName matchLocalCategory
     * @return bool|null
     */
    public function getMatchLocalCategory()
    {
        return $this->matchLocalCategory;
    }

    /**
     * Setter for matchLocalCategory
     *
     * @ElementName matchLocalCategory
     * @param bool|null $matchLocalCategory
     * @return $this
     */
    public function setMatchLocalCategory($matchLocalCategory)
    {
        $this->matchLocalCategory = $matchLocalCategory;
        return $this;
    }

    /**
     * Getter for matchNationalCategory
     *
     * @ElementName matchNationalCategory
     * @return bool|null
     */
    public function getMatchNationalCategory()
    {
        return $this->matchNationalCategory;
    }

    /**
     * Setter for matchNationalCategory
     *
     * @ElementName matchNationalCategory
     * @param bool|null $matchNationalCategory
     * @return $this
     */
    public function setMatchNationalCategory($matchNationalCategory)
    {
        $this->matchNationalCategory = $matchNationalCategory;
        return $this;
    }

    /**
     * Getter for matchInterlataCategory
     *
     * @ElementName matchInterlataCategory
     * @return bool|null
     */
    public function getMatchInterlataCategory()
    {
        return $this->matchInterlataCategory;
    }

    /**
     * Setter for matchInterlataCategory
     *
     * @ElementName matchInterlataCategory
     * @param bool|null $matchInterlataCategory
     * @return $this
     */
    public function setMatchInterlataCategory($matchInterlataCategory)
    {
        $this->matchInterlataCategory = $matchInterlataCategory;
        return $this;
    }

    /**
     * Getter for matchIntralataCategory
     *
     * @ElementName matchIntralataCategory
     * @return bool|null
     */
    public function getMatchIntralataCategory()
    {
        return $this->matchIntralataCategory;
    }

    /**
     * Setter for matchIntralataCategory
     *
     * @ElementName matchIntralataCategory
     * @param bool|null $matchIntralataCategory
     * @return $this
     */
    public function setMatchIntralataCategory($matchIntralataCategory)
    {
        $this->matchIntralataCategory = $matchIntralataCategory;
        return $this;
    }

    /**
     * Getter for matchInternationalCategory
     *
     * @ElementName matchInternationalCategory
     * @return bool|null
     */
    public function getMatchInternationalCategory()
    {
        return $this->matchInternationalCategory;
    }

    /**
     * Setter for matchInternationalCategory
     *
     * @ElementName matchInternationalCategory
     * @param bool|null $matchInternationalCategory
     * @return $this
     */
    public function setMatchInternationalCategory($matchInternationalCategory)
    {
        $this->matchInternationalCategory = $matchInternationalCategory;
        return $this;
    }

    /**
     * Getter for matchPrivateCategory
     *
     * @ElementName matchPrivateCategory
     * @return bool|null
     */
    public function getMatchPrivateCategory()
    {
        return $this->matchPrivateCategory;
    }

    /**
     * Setter for matchPrivateCategory
     *
     * @ElementName matchPrivateCategory
     * @param bool|null $matchPrivateCategory
     * @return $this
     */
    public function setMatchPrivateCategory($matchPrivateCategory)
    {
        $this->matchPrivateCategory = $matchPrivateCategory;
        return $this;
    }

    /**
     * Getter for matchEmergencyCategory
     *
     * @ElementName matchEmergencyCategory
     * @return bool|null
     */
    public function getMatchEmergencyCategory()
    {
        return $this->matchEmergencyCategory;
    }

    /**
     * Setter for matchEmergencyCategory
     *
     * @ElementName matchEmergencyCategory
     * @param bool|null $matchEmergencyCategory
     * @return $this
     */
    public function setMatchEmergencyCategory($matchEmergencyCategory)
    {
        $this->matchEmergencyCategory = $matchEmergencyCategory;
        return $this;
    }

    /**
     * Getter for matchOtherCategory
     *
     * @ElementName matchOtherCategory
     * @return bool|null
     */
    public function getMatchOtherCategory()
    {
        return $this->matchOtherCategory;
    }

    /**
     * Setter for matchOtherCategory
     *
     * @ElementName matchOtherCategory
     * @param bool|null $matchOtherCategory
     * @return $this
     */
    public function setMatchOtherCategory($matchOtherCategory)
    {
        $this->matchOtherCategory = $matchOtherCategory;
        return $this;
    }


}

