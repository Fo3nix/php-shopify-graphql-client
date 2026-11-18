<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Digital wallet, such as Apple Pay, which can be used for accelerated checkouts.
 */
class ShopifyDigitalWalletEnumObject extends EnumObject
{
    /**
     * Apple Pay.
     */
    const APPLE_PAY = "APPLE_PAY";
    /**
     * Android Pay.
     */
    const ANDROID_PAY = "ANDROID_PAY";
    /**
     * Google Pay.
     */
    const GOOGLE_PAY = "GOOGLE_PAY";
    /**
     * Shopify Pay.
     */
    const SHOPIFY_PAY = "SHOPIFY_PAY";
    /**
     * Facebook Pay.
     */
    const FACEBOOK_PAY = "FACEBOOK_PAY";
    /**
     * Amazon Pay.
     */
    const AMAZON_PAY = "AMAZON_PAY";
}
