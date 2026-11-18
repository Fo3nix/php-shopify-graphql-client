<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the BalanceTransaction query.
 */
class ShopifyBalanceTransactionSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `amount` value.
     */
    const AMOUNT = "AMOUNT";
    /**
     * Sort by the `fee` value.
     */
    const FEE = "FEE";
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
    /**
     * Sort by the `net` value.
     */
    const NET = "NET";
    /**
     * Sort by the `order_name` value.
     */
    const ORDER_NAME = "ORDER_NAME";
    /**
     * Sort by the `payment_method_name` value.
     */
    const PAYMENT_METHOD_NAME = "PAYMENT_METHOD_NAME";
    /**
     * Sort by the `payout_date` value.
     */
    const PAYOUT_DATE = "PAYOUT_DATE";
    /**
     * Sort by the `payout_status` value.
     */
    const PAYOUT_STATUS = "PAYOUT_STATUS";
    /**
     * Sort by the `processed_at` value.
     */
    const PROCESSED_AT = "PROCESSED_AT";
    /**
     * Sort by the `transaction_type` value.
     */
    const TRANSACTION_TYPE = "TRANSACTION_TYPE";
}
