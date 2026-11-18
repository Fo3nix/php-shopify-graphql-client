<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CheckoutBrandingUpsertUserError`.
 */
class ShopifyCheckoutBrandingUpsertUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Unexpected internal error happened.
     */
    const INTERNAL_ERROR = "INTERNAL_ERROR";
}
