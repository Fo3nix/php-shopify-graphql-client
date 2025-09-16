<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class BulkOperationStatusEnumObject extends EnumObject
{
    const CANCELED = "CANCELED";
    const CANCELING = "CANCELING";
    const COMPLETED = "COMPLETED";
    const CREATED = "CREATED";
    const EXPIRED = "EXPIRED";
    const FAILED = "FAILED";
    const RUNNING = "RUNNING";
}
