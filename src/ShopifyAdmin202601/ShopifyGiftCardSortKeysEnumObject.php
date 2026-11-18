<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the GiftCard query.
 */
class ShopifyGiftCardSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `amount_spent` value.
     */
    const AMOUNT_SPENT = "AMOUNT_SPENT";
    /**
     * Sort by the `balance` value.
     */
    const BALANCE = "BALANCE";
    /**
     * Sort by the `code` value.
     */
    const CODE = "CODE";
    /**
     * Sort by the `created_at` value.
     */
    const CREATED_AT = "CREATED_AT";
    /**
     * Sort by the `customer_name` value.
     */
    const CUSTOMER_NAME = "CUSTOMER_NAME";
    /**
     * Sort by the `disabled_at` value.
     */
    const DISABLED_AT = "DISABLED_AT";
    /**
     * Sort by the `expires_on` value.
     */
    const EXPIRES_ON = "EXPIRES_ON";
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
    /**
     * Sort by the `initial_value` value.
     */
    const INITIAL_VALUE = "INITIAL_VALUE";
    /**
     * Sort by the `updated_at` value.
     */
    const UPDATED_AT = "UPDATED_AT";
}
