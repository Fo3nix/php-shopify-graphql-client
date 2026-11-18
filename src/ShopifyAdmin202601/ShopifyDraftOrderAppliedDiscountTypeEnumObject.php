<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The valid discount types that can be applied to a draft order.
 */
class ShopifyDraftOrderAppliedDiscountTypeEnumObject extends EnumObject
{
    /**
     * A fixed amount in the store's currency.
     */
    const FIXED_AMOUNT = "FIXED_AMOUNT";
    /**
     * A percentage of the order subtotal.
     */
    const PERCENTAGE = "PERCENTAGE";
}
