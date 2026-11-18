<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLocation;

/**
 * The record of when a customer consented to receive marketing material by email.
 */
class ShopifyCustomerEmailMarketingConsentState
{
    protected $consentUpdatedAt;
    protected $marketingOptInLevel;
    protected $marketingState;
    protected $sourceLocation;

    
    /**
     * The date and time at which the customer consented to receive marketing material by email.
     * The customer's consent state reflects the consent record with the most recent `consent_updated_at` date.
     * If no date is provided, then the date and time at which the consent information was sent is used.
     *
     * @return Carbon
     */
    public function getConsentUpdatedAt(): ?Carbon
    {
        return $this->consentUpdatedAt;
    }

    
    /**
     * The marketing subscription opt-in level, as described by the M3AAWG best practices guidelines,
     * that the customer gave when they consented to receive marketing material by email.
     *
     * @return string A ShopifyCustomerMarketingOptInLevelEnumObject value
     */
    public function getMarketingOptInLevel(): ?string
    {
        return $this->marketingOptInLevel;
    }

    
    /**
     * The current email marketing state for the customer.
     *
     * @return string A ShopifyCustomerEmailMarketingStateEnumObject value
     */
    public function getMarketingState(): ?string
    {
        return $this->marketingState;
    }

    
    /**
     * The location where the customer consented to receive marketing material by email.
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
