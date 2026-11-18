<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The role of the combined listing.
 */
class ShopifyCombinedListingsRoleEnumObject extends EnumObject
{
    /**
     * The product is the parent of a combined listing.
     */
    const PARENT = "PARENT";
    /**
     * The product is the child of a combined listing.
     */
    const CHILD = "CHILD";
}
