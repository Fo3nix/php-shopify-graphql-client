<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Specifies the kind of the suggested order transaction.
 */
class ShopifySuggestedOrderTransactionKindEnumObject extends EnumObject
{
    /**
     * A suggested refund transaction for an order.
     */
    const SUGGESTED_REFUND = "SUGGESTED_REFUND";
}
