<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible branding of a shop.
 * Branding can be used to define the look of a shop including its styling and logo in the Shopify Admin.
 */
class ShopifyShopBrandingEnumObject extends EnumObject
{
    /**
     * Shop has Shopify Gold branding.
     */
    const SHOPIFY_GOLD = "SHOPIFY_GOLD";
    /**
     * Shop has Shopify Plus branding.
     */
    const SHOPIFY_PLUS = "SHOPIFY_PLUS";
    /**
     * Shop has Rogers branding.
     */
    const ROGERS = "ROGERS";
    /**
     * Shop has Shopify branding.
     */
    const SHOPIFY = "SHOPIFY";
}
