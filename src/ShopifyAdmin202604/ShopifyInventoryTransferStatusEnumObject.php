<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The status of a transfer.
 */
class ShopifyInventoryTransferStatusEnumObject extends EnumObject
{
    /**
     * The inventory transfer has been created but not yet finalized.
     */
    const DRAFT = "DRAFT";
    /**
     * The inventory transfer has been created, but not yet shipped.
     */
    const READY_TO_SHIP = "READY_TO_SHIP";
    /**
     * The inventory transfer is in progress, with a shipment currently underway or received.
     */
    const IN_PROGRESS = "IN_PROGRESS";
    /**
     * The inventory transfer has been completely received at the destination.
     */
    const TRANSFERRED = "TRANSFERRED";
    /**
     * The inventory transfer has been canceled.
     */
    const CANCELED = "CANCELED";
    /**
     * Status not included in the current enumeration set.
     */
    const OTHER = "OTHER";
}
