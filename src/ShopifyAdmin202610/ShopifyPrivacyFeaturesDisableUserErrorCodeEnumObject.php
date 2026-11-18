<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `PrivacyFeaturesDisableUserError`.
 */
class ShopifyPrivacyFeaturesDisableUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Failed to disable privacy features.
     */
    const FAILED = "FAILED";
}
