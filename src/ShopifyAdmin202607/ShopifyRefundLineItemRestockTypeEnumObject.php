<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The type of restock performed for a particular refund line item.
 */
class ShopifyRefundLineItemRestockTypeEnumObject extends EnumObject
{
    /**
     * The refund line item was returned. Use this when restocking line items that were fulfilled.
     */
    const RETURN = "RETURN";
    /**
     * The refund line item was canceled. Use this when restocking unfulfilled line items.
     */
    const CANCEL = "CANCEL";
    /**
     * Deprecated. The refund line item was restocked, without specifically being identified as a return or cancelation. This value is not accepted when creating new refunds.
     */
    const LEGACY_RESTOCK = "LEGACY_RESTOCK";
    /**
     * Refund line item was not restocked.
     */
    const NO_RESTOCK = "NO_RESTOCK";
}
