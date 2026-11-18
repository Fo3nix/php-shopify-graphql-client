<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ShopifyPaymentsPayoutAlternateCurrencyCreateUserError`.
 */
class ShopifyShopifyPaymentsPayoutAlternateCurrencyCreateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * No Stripe provider account was found.
     */
    const MISSING_PROVIDER_ACCOUNT = "MISSING_PROVIDER_ACCOUNT";
    /**
     * Failed to create payout due to an error from Stripe.
     */
    const ALTERNATE_CURRENCY_PAYOUT_FAILED_STRIPE_ERROR = "ALTERNATE_CURRENCY_PAYOUT_FAILED_STRIPE_ERROR";
    /**
     * Failed to create payout due to an error from Shopify Core.
     */
    const UNKNOWN_CORE_ERROR = "UNKNOWN_CORE_ERROR";
    /**
     * Failed to create payout, there is no eligible balance in this currency.
     */
    const ALTERNATE_CURRENCY_PAYOUT_FAILED_NO_ELIGIBLE_BALANCE = "ALTERNATE_CURRENCY_PAYOUT_FAILED_NO_ELIGIBLE_BALANCE";
}
