<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the CheckoutAndAccountsConfigurationsGraphQL query.
 */
class ShopifyCheckoutAndAccountsConfigurationsGraphQLSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `created_at` value.
     */
    const CREATED_AT = "CREATED_AT";
    /**
     * Sort by the `edited_at` value.
     */
    const EDITED_AT = "EDITED_AT";
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
    /**
     * Sort by the `is_published` value.
     */
    const IS_PUBLISHED = "IS_PUBLISHED";
}
