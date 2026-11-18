<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The status of the app subscription.
 */
class ShopifyAppSubscriptionStatusEnumObject extends EnumObject
{
    /**
     * The app subscription is pending approval by the merchant.
     */
    const PENDING = "PENDING";
    /**
     * The app subscription has been approved by the merchant. Active app subscriptions are billed to the shop. After payment, partners receive payouts.
     */
    const ACTIVE = "ACTIVE";
    /**
     * The app subscription was declined by the merchant. This is a terminal state.
     */
    const DECLINED = "DECLINED";
    /**
     * The app subscription wasn't approved by the merchant within two days of being created. This is a terminal state.
     */
    const EXPIRED = "EXPIRED";
    /**
     * The app subscription is on hold due to non-payment. The subscription re-activates after payments resume.
     */
    const FROZEN = "FROZEN";
    /**
     * The app subscription was cancelled by the app. This could be caused by the app being uninstalled, a new app subscription being activated, or a direct cancellation by the app. This is a terminal state.
     */
    const CANCELLED = "CANCELLED";
}
