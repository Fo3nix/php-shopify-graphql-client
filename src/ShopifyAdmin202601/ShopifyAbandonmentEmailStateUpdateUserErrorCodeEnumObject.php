<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `AbandonmentEmailStateUpdateUserError`.
 */
class ShopifyAbandonmentEmailStateUpdateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Unable to find an Abandonment for the provided ID.
     */
    const ABANDONMENT_NOT_FOUND = "ABANDONMENT_NOT_FOUND";
}
