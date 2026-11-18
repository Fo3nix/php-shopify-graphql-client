<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The order's aggregated requested order edit status that's used for display purposes.
 * An order might have multiple requested order edits, so this field communicates the prioritized status.
 * The `OrderDisplayRequestedEditStatus` enum is a supported filter parameter in the [`orders` query](https://shopify.dev/api/admin-graphql/latest/queries/orders).
 */
class ShopifyOrderDisplayRequestedEditStatusEnumObject extends EnumObject
{
    /**
     * No edits were requested for the order.
     */
    const NONE = "NONE";
    /**
     * At least one requested order edit on the order is pending merchant action.
     */
    const REQUESTED = "REQUESTED";
    /**
     * All requested order edits on the order are closed and the most recent was resolved by the merchant.
     */
    const RESOLVED = "RESOLVED";
    /**
     * All requested order edits on the order are closed and the most recent was declined by the merchant.
     */
    const DECLINED = "DECLINED";
}
