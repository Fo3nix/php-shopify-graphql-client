<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible types of app developer.
 */
class ShopifyAppDeveloperTypeEnumObject extends EnumObject
{
    /**
     * Indicates the app developer is Shopify.
     */
    const SHOPIFY = "SHOPIFY";
    /**
     * Indicates the app developer is a Partner.
     */
    const PARTNER = "PARTNER";
    /**
     * Indicates the app developer works directly for a Merchant.
     */
    const MERCHANT = "MERCHANT";
    /**
     * Indicates the app developer is unknown. It is not categorized as any of the other developer types.
     */
    const UNKNOWN = "UNKNOWN";
}
