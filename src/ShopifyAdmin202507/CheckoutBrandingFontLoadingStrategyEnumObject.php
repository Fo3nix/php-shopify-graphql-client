<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class CheckoutBrandingFontLoadingStrategyEnumObject extends EnumObject
{
    const AUTO = "AUTO";
    const BLOCK = "BLOCK";
    const SWAP = "SWAP";
    const FALLBACK = "FALLBACK";
    const OPTIONAL = "OPTIONAL";
}
