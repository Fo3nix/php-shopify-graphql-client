<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The approval status of the app purchase.
 *
 * The merchant is charged for the purchase immediately after approval, and the status changes to `active`.
 * If the payment fails, then the app purchase remains `pending`.
 *
 * Purchases start as `pending` and can change to: `active`, `declined`, `expired`. After a purchase changes, it
 * remains in that final state.
 */
class ShopifyAppPurchaseStatusEnumObject extends EnumObject
{
    /**
     * The app purchase was approved by the merchant and has been activated by the app. Active app purchases are charged to the merchant and are paid out to the partner.
     */
    const ACTIVE = "ACTIVE";
    /**
     * The app purchase was declined by the merchant.
     */
    const DECLINED = "DECLINED";
    /**
     * The app purchase was not accepted within two days of being created.
     */
    const EXPIRED = "EXPIRED";
    /**
     * The app purchase is pending approval by the merchant.
     */
    const PENDING = "PENDING";
}
