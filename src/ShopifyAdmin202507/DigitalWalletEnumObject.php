<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class DigitalWalletEnumObject extends EnumObject
{
    const APPLE_PAY = "APPLE_PAY";
    const ANDROID_PAY = "ANDROID_PAY";
    const GOOGLE_PAY = "GOOGLE_PAY";
    const SHOPIFY_PAY = "SHOPIFY_PAY";
    const FACEBOOK_PAY = "FACEBOOK_PAY";
    const AMAZON_PAY = "AMAZON_PAY";
}
