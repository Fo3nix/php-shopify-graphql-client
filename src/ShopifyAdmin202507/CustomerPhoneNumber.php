<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Location;

class CustomerPhoneNumber
{
    protected $marketingCollectedFrom;
    protected $marketingOptInLevel;
    protected $marketingState;
    protected $marketingUpdatedAt;
    protected $phoneNumber;
    protected $sourceLocation;

    
    /**
     * @return CustomerConsentCollectedFromEnumObject
     */
    public function getMarketingCollectedFrom()
    {
        return $this->marketingCollectedFrom;
    }

    
    /**
     * @return CustomerMarketingOptInLevelEnumObject
     */
    public function getMarketingOptInLevel()
    {
        return $this->marketingOptInLevel;
    }

    
    /**
     * @return CustomerSmsMarketingStateEnumObject
     */
    public function getMarketingState()
    {
        return $this->marketingState;
    }

    
    /**
     * @return Carbon
     */
    public function getMarketingUpdatedAt()
    {
        return $this->marketingUpdatedAt;
    }

    
    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    
    /**
     * @return Location
     */
    public function getSourceLocation()
    {
        return $this->sourceLocation;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['marketingCollectedFrom']) && $data['marketingCollectedFrom'] !== null) {
                $instance->marketingCollectedFrom = $data['marketingCollectedFrom'];
            }
            if (isset($data['marketingOptInLevel']) && $data['marketingOptInLevel'] !== null) {
                $instance->marketingOptInLevel = $data['marketingOptInLevel'];
            }
            if (isset($data['marketingState']) && $data['marketingState'] !== null) {
                $instance->marketingState = $data['marketingState'];
            }
            if (isset($data['marketingUpdatedAt']) && $data['marketingUpdatedAt'] !== null) {
                $instance->marketingUpdatedAt = new Carbon($data['marketingUpdatedAt']);
            }
            if (isset($data['phoneNumber']) && $data['phoneNumber'] !== null) {
                $instance->phoneNumber = $data['phoneNumber'];
            }
            if (isset($data['sourceLocation']) && $data['sourceLocation'] !== null) {
                $instance->sourceLocation = Location::fromArray($data['sourceLocation']);
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
            if ($this->marketingCollectedFrom !== null) {
                $data['marketingCollectedFrom'] = $this->marketingCollectedFrom;
            }
            if ($this->marketingOptInLevel !== null) {
                $data['marketingOptInLevel'] = $this->marketingOptInLevel;
            }
            if ($this->marketingState !== null) {
                $data['marketingState'] = $this->marketingState;
            }
            if ($this->marketingUpdatedAt !== null) {
                $data['marketingUpdatedAt'] = $this->marketingUpdatedAt->toIso8601String();
            }
            if ($this->phoneNumber !== null) {
                $data['phoneNumber'] = $this->phoneNumber;
            }
            if ($this->sourceLocation !== null) {
                $data['sourceLocation'] = $this->sourceLocation->asArray();
            }
            return $data;
        }
}
