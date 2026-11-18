<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `PreviewInstallUserError`.
 */
class ShopifyPreviewInstallUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Unexpected internal error happened.
     */
    const INTERNAL_ERROR = "INTERNAL_ERROR";
}
