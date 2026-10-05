<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLocation;
use Carbon\Carbon;

class ShopifyCustomerSmsMarketingConsent
{
    protected $collectedFrom;
    protected $optInLevel;
    protected $sourceLocation;
    protected $state;
    protected $updatedAt;

    
    /**
     * @return ShopifyCustomerConsentCollectedFromEnumObject
     */
    public function getCollectedFrom()
    {
        return $this->collectedFrom;
    }

    
    /**
     * @return ShopifyCustomerMarketingOptInLevelEnumObject
     */
    public function getOptInLevel()
    {
        return $this->optInLevel;
    }

    
    /**
     * @return ShopifyLocation
     */
    public function getSourceLocation()
    {
        return $this->sourceLocation;
    }

    
    /**
     * @return ShopifyCustomerMarketingConsentStateEnumObject
     */
    public function getState()
    {
        return $this->state;
    }

    
    /**
     * @return Carbon
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['collectedFrom']) && $data['collectedFrom'] !== null) {
                $instance->collectedFrom = $data['collectedFrom'];
            }
            if (isset($data['optInLevel']) && $data['optInLevel'] !== null) {
                $instance->optInLevel = $data['optInLevel'];
            }
            if (isset($data['sourceLocation']) && $data['sourceLocation'] !== null) {
                $instance->sourceLocation = ShopifyLocation::fromArray($data['sourceLocation']);
            }
            if (isset($data['state']) && $data['state'] !== null) {
                $instance->state = $data['state'];
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
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
            if ($this->collectedFrom !== null) {
                $data['collectedFrom'] = $this->collectedFrom;
            }
            if ($this->optInLevel !== null) {
                $data['optInLevel'] = $this->optInLevel;
            }
            if ($this->sourceLocation !== null) {
                $data['sourceLocation'] = $this->sourceLocation->asArray();
            }
            if ($this->state !== null) {
                $data['state'] = $this->state;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
