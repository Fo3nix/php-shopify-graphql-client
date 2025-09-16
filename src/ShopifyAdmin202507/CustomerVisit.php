<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MarketingEvent;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\UTMParameters;

class CustomerVisit
{
    protected $id;
    protected $landingPage;
    protected $landingPageHtml;
    protected $marketingEvent;
    protected $occurredAt;
    protected $referralCode;
    protected $referralInfoHtml;
    protected $referrerUrl;
    protected $source;
    protected $sourceDescription;
    protected $sourceType;
    protected $utmParameters;

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getLandingPage()
    {
        return $this->landingPage;
    }

    
    /**
     * @return string
     */
    public function getLandingPageHtml()
    {
        return $this->landingPageHtml;
    }

    
    /**
     * @return MarketingEvent
     */
    public function getMarketingEvent()
    {
        return $this->marketingEvent;
    }

    
    /**
     * @return Carbon
     */
    public function getOccurredAt()
    {
        return $this->occurredAt;
    }

    
    /**
     * @return string
     */
    public function getReferralCode()
    {
        return $this->referralCode;
    }

    
    /**
     * @return string
     */
    public function getReferralInfoHtml()
    {
        return $this->referralInfoHtml;
    }

    
    /**
     * @return string
     */
    public function getReferrerUrl()
    {
        return $this->referrerUrl;
    }

    
    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    
    /**
     * @return string
     */
    public function getSourceDescription()
    {
        return $this->sourceDescription;
    }

    
    /**
     * @return MarketingTacticEnumObject
     */
    public function getSourceType()
    {
        return $this->sourceType;
    }

    
    /**
     * @return UTMParameters
     */
    public function getUtmParameters()
    {
        return $this->utmParameters;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['landingPage']) && $data['landingPage'] !== null) {
                $instance->landingPage = $data['landingPage'];
            }
            if (isset($data['landingPageHtml']) && $data['landingPageHtml'] !== null) {
                $instance->landingPageHtml = $data['landingPageHtml'];
            }
            if (isset($data['marketingEvent']) && $data['marketingEvent'] !== null) {
                $instance->marketingEvent = MarketingEvent::fromArray($data['marketingEvent']);
            }
            if (isset($data['occurredAt']) && $data['occurredAt'] !== null) {
                $instance->occurredAt = new Carbon($data['occurredAt']);
            }
            if (isset($data['referralCode']) && $data['referralCode'] !== null) {
                $instance->referralCode = $data['referralCode'];
            }
            if (isset($data['referralInfoHtml']) && $data['referralInfoHtml'] !== null) {
                $instance->referralInfoHtml = $data['referralInfoHtml'];
            }
            if (isset($data['referrerUrl']) && $data['referrerUrl'] !== null) {
                $instance->referrerUrl = $data['referrerUrl'];
            }
            if (isset($data['source']) && $data['source'] !== null) {
                $instance->source = $data['source'];
            }
            if (isset($data['sourceDescription']) && $data['sourceDescription'] !== null) {
                $instance->sourceDescription = $data['sourceDescription'];
            }
            if (isset($data['sourceType']) && $data['sourceType'] !== null) {
                $instance->sourceType = $data['sourceType'];
            }
            if (isset($data['utmParameters']) && $data['utmParameters'] !== null) {
                $instance->utmParameters = UTMParameters::fromArray($data['utmParameters']);
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->landingPage !== null) {
                $data['landingPage'] = $this->landingPage;
            }
            if ($this->landingPageHtml !== null) {
                $data['landingPageHtml'] = $this->landingPageHtml;
            }
            if ($this->marketingEvent !== null) {
                $data['marketingEvent'] = $this->marketingEvent->asArray();
            }
            if ($this->occurredAt !== null) {
                $data['occurredAt'] = $this->occurredAt->toIso8601String();
            }
            if ($this->referralCode !== null) {
                $data['referralCode'] = $this->referralCode;
            }
            if ($this->referralInfoHtml !== null) {
                $data['referralInfoHtml'] = $this->referralInfoHtml;
            }
            if ($this->referrerUrl !== null) {
                $data['referrerUrl'] = $this->referrerUrl;
            }
            if ($this->source !== null) {
                $data['source'] = $this->source;
            }
            if ($this->sourceDescription !== null) {
                $data['sourceDescription'] = $this->sourceDescription;
            }
            if ($this->sourceType !== null) {
                $data['sourceType'] = $this->sourceType;
            }
            if ($this->utmParameters !== null) {
                $data['utmParameters'] = $this->utmParameters->asArray();
            }
            return $data;
        }
}
