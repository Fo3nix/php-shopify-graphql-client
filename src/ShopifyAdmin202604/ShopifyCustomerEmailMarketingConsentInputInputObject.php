<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * Information that describes when a customer consented to
 *         receiving marketing material by email.
 */
class ShopifyCustomerEmailMarketingConsentInputInputObject extends InputObject
{
    const REQUIRED = ["marketingState"];

    protected $marketingOptInLevel;
    protected $marketingState;
    protected $consentUpdatedAt;
    protected $sourceLocationId;

    /**
     * The customer opt-in level at the time of subscribing to marketing material.
     */
    public function setMarketingOptInLevel($shopifyCustomerMarketingOptInLevel): static
    {
        $this->marketingOptInLevel = new RawObject($shopifyCustomerMarketingOptInLevel);

        return $this;
    }

    /**
     * The marketing state to set. Accepted values: SUBSCRIBED, UNSUBSCRIBED, and PENDING. NOT_SUBSCRIBED, REDACTED, and INVALID are rejected if sent as input.
     */
    public function setMarketingState($shopifyCustomerEmailMarketingState): static
    {
        $this->marketingState = new RawObject($shopifyCustomerEmailMarketingState);

        return $this;
    }

    /**
     * The latest date and time when the customer consented or objected to
     *           receiving marketing material by email.
     */
    public function setConsentUpdatedAt($consentUpdatedAt): static
    {
        $this->consentUpdatedAt = $consentUpdatedAt;

        return $this;
    }

    /**
     * Identifies the location where the customer consented to receiving marketing material by email.
     */
    public function setSourceLocationId($sourceLocationId): static
    {
        $this->sourceLocationId = $sourceLocationId;

        return $this;
    }
}
