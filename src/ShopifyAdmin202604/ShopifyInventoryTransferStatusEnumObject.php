<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifyInventoryTransferStatusEnumObject extends EnumObject
{
    const DRAFT = "DRAFT";
    const READY_TO_SHIP = "READY_TO_SHIP";
    const IN_PROGRESS = "IN_PROGRESS";
    const TRANSFERRED = "TRANSFERRED";
    const CANCELED = "CANCELED";
    const OTHER = "OTHER";
}
