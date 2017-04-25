<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalMarketplaceInfo
{

    /**
     * @var boolean $hasLocalVersionEdits
     */
    protected $hasLocalVersionEdits = null;

    /**
     * @var string $negotiationStatus
     */
    protected $negotiationStatus = null;

    /**
     * @var string $marketplaceComment
     */
    protected $marketplaceComment = null;

    /**
     * @var boolean $isNewVersionFromBuyer
     */
    protected $isNewVersionFromBuyer = null;

    /**
     * @var int $buyerAccountId
     */
    protected $buyerAccountId = null;

    /**
     * @param boolean $hasLocalVersionEdits
     * @param string $negotiationStatus
     * @param string $marketplaceComment
     * @param boolean $isNewVersionFromBuyer
     * @param int $buyerAccountId
     */
    public function __construct($hasLocalVersionEdits = null, $negotiationStatus = null, $marketplaceComment = null, $isNewVersionFromBuyer = null, $buyerAccountId = null)
    {
      $this->hasLocalVersionEdits = $hasLocalVersionEdits;
      $this->negotiationStatus = $negotiationStatus;
      $this->marketplaceComment = $marketplaceComment;
      $this->isNewVersionFromBuyer = $isNewVersionFromBuyer;
      $this->buyerAccountId = $buyerAccountId;
    }

    /**
     * @return boolean
     */
    public function getHasLocalVersionEdits()
    {
      return $this->hasLocalVersionEdits;
    }

    /**
     * @param boolean $hasLocalVersionEdits
     * @return \Google\AdsApi\Dfp\v201611\ProposalMarketplaceInfo
     */
    public function setHasLocalVersionEdits($hasLocalVersionEdits)
    {
      $this->hasLocalVersionEdits = $hasLocalVersionEdits;
      return $this;
    }

    /**
     * @return string
     */
    public function getNegotiationStatus()
    {
      return $this->negotiationStatus;
    }

    /**
     * @param string $negotiationStatus
     * @return \Google\AdsApi\Dfp\v201611\ProposalMarketplaceInfo
     */
    public function setNegotiationStatus($negotiationStatus)
    {
      $this->negotiationStatus = $negotiationStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getMarketplaceComment()
    {
      return $this->marketplaceComment;
    }

    /**
     * @param string $marketplaceComment
     * @return \Google\AdsApi\Dfp\v201611\ProposalMarketplaceInfo
     */
    public function setMarketplaceComment($marketplaceComment)
    {
      $this->marketplaceComment = $marketplaceComment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsNewVersionFromBuyer()
    {
      return $this->isNewVersionFromBuyer;
    }

    /**
     * @param boolean $isNewVersionFromBuyer
     * @return \Google\AdsApi\Dfp\v201611\ProposalMarketplaceInfo
     */
    public function setIsNewVersionFromBuyer($isNewVersionFromBuyer)
    {
      $this->isNewVersionFromBuyer = $isNewVersionFromBuyer;
      return $this;
    }

    /**
     * @return int
     */
    public function getBuyerAccountId()
    {
      return $this->buyerAccountId;
    }

    /**
     * @param int $buyerAccountId
     * @return \Google\AdsApi\Dfp\v201611\ProposalMarketplaceInfo
     */
    public function setBuyerAccountId($buyerAccountId)
    {
      $this->buyerAccountId = $buyerAccountId;
      return $this;
    }

}
