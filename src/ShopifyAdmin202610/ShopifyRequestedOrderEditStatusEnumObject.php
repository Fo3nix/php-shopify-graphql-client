<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The status of a buyer-initiated requested order edit.
 */
class ShopifyRequestedOrderEditStatusEnumObject extends EnumObject
{
    /**
     * The requested order edit is pending merchant action.
     */
    const REQUESTED = "REQUESTED";
    /**
     * The requested order edit has been resolved by the merchant.
     */
    const RESOLVED = "RESOLVED";
    /**
     * The requested order edit was declined by the merchant.
     */
    const DECLINED = "DECLINED";
}
