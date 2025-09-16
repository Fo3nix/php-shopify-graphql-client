<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class InventoryShipmentStatusEnumObject extends EnumObject
{
    const DRAFT = "DRAFT";
    const IN_TRANSIT = "IN_TRANSIT";
    const PARTIALLY_RECEIVED = "PARTIALLY_RECEIVED";
    const RECEIVED = "RECEIVED";
    const OTHER = "OTHER";
}
