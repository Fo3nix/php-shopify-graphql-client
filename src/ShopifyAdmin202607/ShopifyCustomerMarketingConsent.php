<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyLocation;
use Carbon\Carbon;

/**
 * The marketing consent information for a [customer](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) on a specific marketing channel. Channel-specific types like [`CustomerWhatsAppMarketingConsent`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CustomerWhatsAppMarketingConsent) implement this interface.
 */
interface ShopifyCustomerMarketingConsent
{
    
    /**
     * The [source](https://shopify.dev/docs/api/admin-graphql/latest/enums/CustomerConsentCollectedFrom) from which the marketing consent was collected.
     *
     * @return string A ShopifyCustomerConsentCollectedFromEnumObject value
     */
    public function getCollectedFrom(): ?string;

    
    /**
     * The [marketing subscription opt-in level](https://shopify.dev/docs/api/admin-graphql/latest/enums/CustomerMarketingOptInLevel) that was set when the customer's marketing consent was last updated. Follows M3AAWG best practices guidelines.
     *
     * @return string A ShopifyCustomerMarketingOptInLevelEnumObject value
     */
    public function getOptInLevel(): ?string;

    
    /**
     * The [location](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location) where the customer consented to receive marketing material.
     *
     * @return ShopifyLocation
     */
    public function getSourceLocation(): ?ShopifyLocation;

    
    /**
     * The customer's current [marketing consent state](https://shopify.dev/docs/api/admin-graphql/latest/enums/CustomerMarketingConsentState) for this channel.
     *
     * @return string A ShopifyCustomerMarketingConsentStateEnumObject value
     */
    public function getState(): ?string;

    
    /**
     * The date and time when the marketing consent was updated.
     *
     * No date is provided if the customer has never updated their marketing consent for this channel.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
