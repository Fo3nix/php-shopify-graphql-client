<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyLocation;

/**
 * A phone number.
 */
class ShopifyCustomerPhoneNumber
{
    protected $marketingCollectedFrom;
    protected $marketingOptInLevel;
    protected $marketingState;
    protected $marketingUpdatedAt;
    protected $phoneNumber;
    protected $sourceLocation;

    
    /**
     * The source from which the SMS marketing information for the customer was collected.
     *
     * @return string A ShopifyCustomerConsentCollectedFromEnumObject value
     */
    public function getMarketingCollectedFrom(): ?string
    {
        return $this->marketingCollectedFrom;
    }

    
    /**
     * The marketing subscription opt-in level, as described by the M3AAWG best practices guidelines,
     * received when the marketing consent was updated.
     *
     * @return string A ShopifyCustomerMarketingOptInLevelEnumObject value
     */
    public function getMarketingOptInLevel(): ?string
    {
        return $this->marketingOptInLevel;
    }

    
    /**
     * Whether the customer has subscribed to SMS marketing material.
     *
     * @return string A ShopifyCustomerSmsMarketingStateEnumObject value
     */
    public function getMarketingState(): ?string
    {
        return $this->marketingState;
    }

    
    /**
     * The date and time at which the marketing consent was updated.
     *
     * No date is provided if the email address never updated its marketing consent.
     *
     * @return Carbon
     */
    public function getMarketingUpdatedAt(): ?Carbon
    {
        return $this->marketingUpdatedAt;
    }

    
    /**
     * A customer's phone number.
     *
     * @return string
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    
    /**
     * The location where the customer consented to receive marketing material by SMS.
     *
     * @return ShopifyLocation
     */
    public function getSourceLocation(): ?ShopifyLocation
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
                $instance->sourceLocation = ShopifyLocation::fromArray($data['sourceLocation']);
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
