<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ShopPolicyUserError`.
 */
class ShopifyShopPolicyErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is too big.
     */
    const TOO_BIG = "TOO_BIG";
}
