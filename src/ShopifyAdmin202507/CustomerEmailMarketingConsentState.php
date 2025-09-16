<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Location;

class CustomerEmailMarketingConsentState
{
    protected $consentUpdatedAt;
    protected $marketingOptInLevel;
    protected $marketingState;
    protected $sourceLocation;

    
    /**
     * @return Carbon
     */
    public function getConsentUpdatedAt()
    {
        return $this->consentUpdatedAt;
    }

    
    /**
     * @return CustomerMarketingOptInLevelEnumObject
     */
    public function getMarketingOptInLevel()
    {
        return $this->marketingOptInLevel;
    }

    
    /**
     * @return CustomerEmailMarketingStateEnumObject
     */
    public function getMarketingState()
    {
        return $this->marketingState;
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
            if (isset($data['consentUpdatedAt']) && $data['consentUpdatedAt'] !== null) {
                $instance->consentUpdatedAt = new Carbon($data['consentUpdatedAt']);
            }
            if (isset($data['marketingOptInLevel']) && $data['marketingOptInLevel'] !== null) {
                $instance->marketingOptInLevel = $data['marketingOptInLevel'];
            }
            if (isset($data['marketingState']) && $data['marketingState'] !== null) {
                $instance->marketingState = $data['marketingState'];
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
            if ($this->consentUpdatedAt !== null) {
                $data['consentUpdatedAt'] = $this->consentUpdatedAt->toIso8601String();
            }
            if ($this->marketingOptInLevel !== null) {
                $data['marketingOptInLevel'] = $this->marketingOptInLevel;
            }
            if ($this->marketingState !== null) {
                $data['marketingState'] = $this->marketingState;
            }
            if ($this->sourceLocation !== null) {
                $data['sourceLocation'] = $this->sourceLocation->asArray();
            }
            return $data;
        }
}
