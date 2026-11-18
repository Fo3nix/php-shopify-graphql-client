<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Actions that can be taken at the location when a client requests the deletion of the fulfillment service.
 */
class ShopifyFulfillmentServiceDeleteInventoryActionEnumObject extends EnumObject
{
    /**
     * Deactivate and delete the inventory and location.
     */
    const DELETE = "DELETE";
    /**
     * Keep the inventory in place and convert the Fulfillment Service's location to be merchant managed.
     */
    const KEEP = "KEEP";
    /**
     * Transfer the inventory and other dependencies to the provided location.
     */
    const TRANSFER = "TRANSFER";
}
