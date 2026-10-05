<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifyAppDeveloperTypeEnumObject extends EnumObject
{
    const SHOPIFY = "SHOPIFY";
    const PARTNER = "PARTNER";
    const MERCHANT = "MERCHANT";
    const UNKNOWN = "UNKNOWN";
}
