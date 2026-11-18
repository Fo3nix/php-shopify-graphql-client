<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the StaffMembers query.
 */
class ShopifyStaffMembersSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `created_at` value.
     */
    const CREATED_AT = "CREATED_AT";
    /**
     * Sort by the `email` value.
     */
    const EMAIL = "EMAIL";
    /**
     * Sort by the `first_name` value.
     */
    const FIRST_NAME = "FIRST_NAME";
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
    /**
     * Sort by the `last_name` value.
     */
    const LAST_NAME = "LAST_NAME";
}
