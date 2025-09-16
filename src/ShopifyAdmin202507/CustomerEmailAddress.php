<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Location;

class CustomerEmailAddress
{
    protected $emailAddress;
    protected $marketingOptInLevel;
    protected $marketingState;
    protected $marketingUnsubscribeUrl;
    protected $marketingUpdatedAt;
    protected $openTrackingLevel;
    protected $openTrackingUrl;
    protected $sourceLocation;
    protected $validFormat;

    
    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    
    /**
     * @return CustomerMarketingOptInLevelEnumObject
     */
    public function getMarketingOptInLevel()
    {
        return $this->marketingOptInLevel;
    }

    
    /**
     * @return CustomerEmailAddressMarketingStateEnumObject
     */
    public function getMarketingState()
    {
        return $this->marketingState;
    }

    
    /**
     * @return string
     */
    public function getMarketingUnsubscribeUrl()
    {
        return $this->marketingUnsubscribeUrl;
    }

    
    /**
     * @return Carbon
     */
    public function getMarketingUpdatedAt()
    {
        return $this->marketingUpdatedAt;
    }

    
    /**
     * @return CustomerEmailAddressOpenTrackingLevelEnumObject
     */
    public function getOpenTrackingLevel()
    {
        return $this->openTrackingLevel;
    }

    
    /**
     * @return string
     */
    public function getOpenTrackingUrl()
    {
        return $this->openTrackingUrl;
    }

    
    /**
     * @return Location
     */
    public function getSourceLocation()
    {
        return $this->sourceLocation;
    }

    
    /**
     * @return bool
     */
    public function getValidFormat()
    {
        return $this->validFormat;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['emailAddress']) && $data['emailAddress'] !== null) {
                $instance->emailAddress = $data['emailAddress'];
            }
            if (isset($data['marketingOptInLevel']) && $data['marketingOptInLevel'] !== null) {
                $instance->marketingOptInLevel = $data['marketingOptInLevel'];
            }
            if (isset($data['marketingState']) && $data['marketingState'] !== null) {
                $instance->marketingState = $data['marketingState'];
            }
            if (isset($data['marketingUnsubscribeUrl']) && $data['marketingUnsubscribeUrl'] !== null) {
                $instance->marketingUnsubscribeUrl = $data['marketingUnsubscribeUrl'];
            }
            if (isset($data['marketingUpdatedAt']) && $data['marketingUpdatedAt'] !== null) {
                $instance->marketingUpdatedAt = new Carbon($data['marketingUpdatedAt']);
            }
            if (isset($data['openTrackingLevel']) && $data['openTrackingLevel'] !== null) {
                $instance->openTrackingLevel = $data['openTrackingLevel'];
            }
            if (isset($data['openTrackingUrl']) && $data['openTrackingUrl'] !== null) {
                $instance->openTrackingUrl = $data['openTrackingUrl'];
            }
            if (isset($data['sourceLocation']) && $data['sourceLocation'] !== null) {
                $instance->sourceLocation = Location::fromArray($data['sourceLocation']);
            }
            if (isset($data['validFormat']) && $data['validFormat'] !== null) {
                $instance->validFormat = $data['validFormat'];
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
            if ($this->emailAddress !== null) {
                $data['emailAddress'] = $this->emailAddress;
            }
            if ($this->marketingOptInLevel !== null) {
                $data['marketingOptInLevel'] = $this->marketingOptInLevel;
            }
            if ($this->marketingState !== null) {
                $data['marketingState'] = $this->marketingState;
            }
            if ($this->marketingUnsubscribeUrl !== null) {
                $data['marketingUnsubscribeUrl'] = $this->marketingUnsubscribeUrl;
            }
            if ($this->marketingUpdatedAt !== null) {
                $data['marketingUpdatedAt'] = $this->marketingUpdatedAt->toIso8601String();
            }
            if ($this->openTrackingLevel !== null) {
                $data['openTrackingLevel'] = $this->openTrackingLevel;
            }
            if ($this->openTrackingUrl !== null) {
                $data['openTrackingUrl'] = $this->openTrackingUrl;
            }
            if ($this->sourceLocation !== null) {
                $data['sourceLocation'] = $this->sourceLocation->asArray();
            }
            if ($this->validFormat !== null) {
                $data['validFormat'] = $this->validFormat;
            }
            return $data;
        }
}
