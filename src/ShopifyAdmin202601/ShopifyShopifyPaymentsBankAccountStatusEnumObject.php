<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The bank account status.
 */
class ShopifyShopifyPaymentsBankAccountStatusEnumObject extends EnumObject
{
    /**
     * A bank account that hasn't had any activity and that's not validated.
     */
    const NEW = "NEW";
    /**
     * It was determined that the bank account exists.
     */
    const VALIDATED = "VALIDATED";
    /**
     * Bank account validation was successful.
     */
    const VERIFIED = "VERIFIED";
    /**
     * A payout to the bank account failed.
     */
    const ERRORED = "ERRORED";
}
