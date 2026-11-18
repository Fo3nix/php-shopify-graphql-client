<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The transfer status of the payout.
 */
class ShopifyShopifyPaymentsPayoutStatusEnumObject extends EnumObject
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
}
