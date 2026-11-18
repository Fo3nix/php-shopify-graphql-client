<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLocation;
use Carbon\Carbon;

/**
 * The WhatsApp marketing consent information for a [customer's phone number](https://shopify.dev/docs/api/admin-graphql/latest/objects/CustomerPhoneNumber). Implements the [`CustomerMarketingConsent`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/CustomerMarketingConsent) interface. Use the [`customerWhatsAppMarketingConsentUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/customerWhatsAppMarketingConsentUpdate) mutation to update it.
 */
class ShopifyCustomerWhatsAppMarketingConsent implements ShopifyCustomerMarketingConsent
{
    protected $collectedFrom;
    protected $optInLevel;
    protected $sourceLocation;
    protected $state;
    protected $updatedAt;

    
    /**
     * The [source](https://shopify.dev/docs/api/admin-graphql/latest/enums/CustomerConsentCollectedFrom) from which the marketing consent was collected.
     *
     * @return string A ShopifyCustomerConsentCollectedFromEnumObject value
     */
    public function getCollectedFrom(): ?string
    {
        return $this->collectedFrom;
    }

    
    /**
     * The [marketing subscription opt-in level](https://shopify.dev/docs/api/admin-graphql/latest/enums/CustomerMarketingOptInLevel) that was set when the customer's marketing consent was last updated. Follows M3AAWG best practices guidelines.
     *
     * @return string A ShopifyCustomerMarketingOptInLevelEnumObject value
     */
    public function getOptInLevel(): ?string
    {
        return $this->optInLevel;
    }

    
    /**
     * The [location](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location) where the customer consented to receive marketing material.
     *
     * @return ShopifyLocation
     */
    public function getSourceLocation(): ?ShopifyLocation
    {
        return $this->sourceLocation;
    }

    
    /**
     * The customer's current [marketing consent state](https://shopify.dev/docs/api/admin-graphql/latest/enums/CustomerMarketingConsentState) for this channel.
     *
     * @return string A ShopifyCustomerMarketingConsentStateEnumObject value
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    
    /**
     * The date and time when the marketing consent was updated.
     *
     * No date is provided if the customer has never updated their marketing consent for this channel.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
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
