<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The valid values for the status of product feed.
 */
class ShopifyProductFeedStatusEnumObject extends EnumObject
{
    /**
     * The product feed is active.
     */
    const ACTIVE = "ACTIVE";
    /**
     * The product feed is inactive.
     */
    const INACTIVE = "INACTIVE";
}
