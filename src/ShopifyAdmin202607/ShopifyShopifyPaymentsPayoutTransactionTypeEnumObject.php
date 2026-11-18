<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible transaction types for a payout.
 */
class ShopifyShopifyPaymentsPayoutTransactionTypeEnumObject extends EnumObject
{
    /**
     * The payout is a deposit.
     */
    const DEPOSIT = "DEPOSIT";
    /**
     * The payout is a withdrawal.
     */
    const WITHDRAWAL = "WITHDRAWAL";
}
