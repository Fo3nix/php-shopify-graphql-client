<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The order's aggregated return status that's used for display purposes.
 * An order might have multiple returns, so this field communicates the prioritized return status.
 * The `OrderReturnStatus` enum is a supported filter parameter in the [`orders` query](https://shopify.dev/api/admin-graphql/latest/queries/orders#:~:text=reference_location_id-,return_status,-risk_level).
 */
class ShopifyOrderReturnStatusEnumObject extends EnumObject
{
    /**
     * Some items in the order are being returned.
     */
    const IN_PROGRESS = "IN_PROGRESS";
    /**
     * All return shipments from a return in this order were inspected.
     */
    const INSPECTION_COMPLETE = "INSPECTION_COMPLETE";
    /**
     * No items in the order were returned.
     */
    const NO_RETURN = "NO_RETURN";
    /**
     * Some items in the order were returned.
     */
    const RETURNED = "RETURNED";
    /**
     * Some returns in the order were not completed successfully.
     */
    const RETURN_FAILED = "RETURN_FAILED";
    /**
     * A return was requested for some items in the order.
     */
    const RETURN_REQUESTED = "RETURN_REQUESTED";
}
