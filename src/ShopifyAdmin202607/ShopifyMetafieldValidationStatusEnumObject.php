<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible metafield validation statuses.
 */
class ShopifyMetafieldValidationStatusEnumObject extends EnumObject
{
    /**
     * Any validation status (valid or invalid).
     */
    const ANY = "ANY";
    /**
     * Valid (according to definition).
     */
    const VALID = "VALID";
    /**
     * Invalid (according to definition).
     */
    const INVALID = "INVALID";
}
