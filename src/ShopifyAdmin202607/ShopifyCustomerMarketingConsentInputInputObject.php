<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for marketing consent information when a [customer](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) consents to receive marketing material on a specific channel. Channel-specific consent mutations like [`customerWhatsAppMarketingConsentUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/customerWhatsAppMarketingConsentUpdate) use this input.
 */
class ShopifyCustomerMarketingConsentInputInputObject extends InputObject
{
    const REQUIRED = ["state"];

    protected $state;
    protected $optInLevel;
    protected $updatedAt;
    protected $sourceLocationId;

    /**
     * The [marketing consent state](https://shopify.dev/docs/api/admin-graphql/latest/enums/CustomerMarketingConsentState) to set for the customer on this channel.
     */
    public function setState($shopifyCustomerMarketingConsentState): static
    {
        $this->state = new RawObject($shopifyCustomerMarketingConsentState);

        return $this;
    }

    /**
     * The [marketing subscription opt-in level](https://shopify.dev/docs/api/admin-graphql/latest/enums/CustomerMarketingOptInLevel) that was set when the customer consented to receive marketing information.
     */
    public function setOptInLevel($shopifyCustomerMarketingOptInLevel): static
    {
        $this->optInLevel = new RawObject($shopifyCustomerMarketingOptInLevel);

        return $this;
    }

    /**
     * The date and time when the customer consented to receive marketing material.
     * If no date is provided, then the date and time when the consent information was sent is used.
     */
    public function setUpdatedAt($updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Identifies the [location](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location) where the customer consented to receiving marketing material.
     */
    public function setSourceLocationId($sourceLocationId): static
    {
        $this->sourceLocationId = $sourceLocationId;

        return $this;
    }
}
