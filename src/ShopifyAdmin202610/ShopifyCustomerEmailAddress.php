<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLocation;

/**
 * A customer's email address with marketing consent. This includes the email address, marketing subscription status, and opt-in level according to [M3AAWG best practices guidelines](https://www.m3aawg.org/news/updated-m3aawg-best-practices-for-senders-urge-opt-in-only-mailings-address-sender-transparency).
 *
 * It also provides the timestamp of when customers last updated marketing consent and URLs for unsubscribing from marketing emails or opting in or out of email open tracking. The [`sourceLocation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CustomerEmailAddress#field-CustomerEmailAddress.fields.sourceLocation) field indicates where the customer consented to receive marketing material.
 */
class ShopifyCustomerEmailAddress
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
     * The customer's default email address.
     *
     * @return string
     */
    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
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
     * Whether the customer has subscribed to email marketing.
     *
     * @return string A ShopifyCustomerEmailAddressMarketingStateEnumObject value
     */
    public function getMarketingState(): ?string
    {
        return $this->marketingState;
    }

    
    /**
     * The URL to unsubscribe a member from all mailing lists.
     *
     * @return string
     */
    public function getMarketingUnsubscribeUrl(): mixed
    {
        return $this->marketingUnsubscribeUrl;
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
     * Whether the customer has opted in to having their opened emails tracked.
     *
     * @return string A ShopifyCustomerEmailAddressOpenTrackingLevelEnumObject value
     */
    public function getOpenTrackingLevel(): ?string
    {
        return $this->openTrackingLevel;
    }

    
    /**
     * The URL that can be used to opt a customer in or out of email open tracking.
     *
     * @return string
     */
    public function getOpenTrackingUrl(): mixed
    {
        return $this->openTrackingUrl;
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
     * Whether the email address is formatted correctly.
     *
     * Returns `true` when the email is formatted correctly. This doesn't guarantee that the email address
     * actually exists.
     *
     * @return bool
     */
    public function getValidFormat(): ?bool
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
                $instance->sourceLocation = ShopifyLocation::fromArray($data['sourceLocation']);
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
