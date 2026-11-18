<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The type of transaction activity.
 */
class ShopifyCashTransactionActivityTypeEnumObject extends EnumObject
{
    /**
     * A cash sale.
     */
    const SALE = "SALE";
    /**
     * A cash refund.
     */
    const REFUND = "REFUND";
    /**
     * Change given to a customer.
     */
    const CHANGE = "CHANGE";
}
