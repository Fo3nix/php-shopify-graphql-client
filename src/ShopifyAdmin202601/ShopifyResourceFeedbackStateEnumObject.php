<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The state of the resource feedback.
 */
class ShopifyResourceFeedbackStateEnumObject extends EnumObject
{
    /**
     * No action required from merchant.
     */
    const ACCEPTED = "ACCEPTED";
    /**
     * The merchant needs to resolve an issue with the resource.
     */
    const REQUIRES_ACTION = "REQUIRES_ACTION";
}
