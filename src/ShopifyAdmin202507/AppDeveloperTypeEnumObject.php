<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class AppDeveloperTypeEnumObject extends EnumObject
{
    const SHOPIFY = "SHOPIFY";
    const PARTNER = "PARTNER";
    const MERCHANT = "MERCHANT";
    const UNKNOWN = "UNKNOWN";
}
