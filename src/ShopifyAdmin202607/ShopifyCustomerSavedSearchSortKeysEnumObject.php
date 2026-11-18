<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the CustomerSavedSearch query.
 */
class ShopifyCustomerSavedSearchSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
    /**
     * Sort by the `name` value.
     */
    const NAME = "NAME";
}
