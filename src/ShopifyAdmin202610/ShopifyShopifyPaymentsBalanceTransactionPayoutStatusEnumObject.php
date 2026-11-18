<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The payout status of the balance transaction.
 */
class ShopifyShopifyPaymentsBalanceTransactionPayoutStatusEnumObject extends EnumObject
{
    /**
     * The payout has been created and had transactions assigned to it, but
     * it has not yet been submitted to the bank.
     */
    const SCHEDULED = "SCHEDULED";
    /**
     * The payout has been successfully deposited into the bank.
     */
    const PAID = "PAID";
    /**
     * The payout has been declined by the bank.
     */
    const FAILED = "FAILED";
    /**
     * The payout has been canceled by Shopify.
     */
    const CANCELED = "CANCELED";
    /**
     * The transaction has not been assigned a payout yet.
     */
    const PENDING = "PENDING";
    /**
     * The transaction requires action before it can be paid out.
     */
    const ACTION_REQUIRED = "ACTION_REQUIRED";
}
