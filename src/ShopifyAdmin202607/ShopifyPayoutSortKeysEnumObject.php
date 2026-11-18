<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the Payout query.
 */
class ShopifyPayoutSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `adjustment_gross` value.
     */
    const ADJUSTMENT_GROSS = "ADJUSTMENT_GROSS";
    /**
     * Sort by the `advance_gross` value.
     */
    const ADVANCE_GROSS = "ADVANCE_GROSS";
    /**
     * Sort by the `amount` value.
     */
    const AMOUNT = "AMOUNT";
    /**
     * Sort by the `charge_gross` value.
     */
    const CHARGE_GROSS = "CHARGE_GROSS";
    /**
     * Sort by the `duties_gross` value.
     */
    const DUTIES_GROSS = "DUTIES_GROSS";
    /**
     * Sort by the `fee_amount` value.
     */
    const FEE_AMOUNT = "FEE_AMOUNT";
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
    /**
     * Sort by the `issued_at` value.
     */
    const ISSUED_AT = "ISSUED_AT";
    /**
     * Sort by the `refund_gross` value.
     */
    const REFUND_GROSS = "REFUND_GROSS";
    /**
     * Sort by the `shipping_label_gross` value.
     */
    const SHIPPING_LABEL_GROSS = "SHIPPING_LABEL_GROSS";
    /**
     * Sort by the `status` value.
     */
    const STATUS = "STATUS";
}
