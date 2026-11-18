<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The source that collected the customer's consent to receive marketing materials.
 */
class ShopifyCustomerConsentCollectedFromEnumObject extends EnumObject
{
    /**
     * The customer consent was collected by Shopify.
     */
    const SHOPIFY = "SHOPIFY";
    /**
     * The customer consent was collected outside of Shopify.
     */
    const OTHER = "OTHER";
}
