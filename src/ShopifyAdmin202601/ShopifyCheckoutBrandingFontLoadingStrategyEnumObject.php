<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

class ShopifyCheckoutBrandingFontLoadingStrategyEnumObject extends EnumObject
{
    const AUTO = "AUTO";
    const BLOCK = "BLOCK";
    const SWAP = "SWAP";
    const FALLBACK = "FALLBACK";
    const OPTIONAL = "OPTIONAL";
}
