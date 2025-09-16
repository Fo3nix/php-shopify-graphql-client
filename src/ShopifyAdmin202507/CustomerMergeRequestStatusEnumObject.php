<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class CustomerMergeRequestStatusEnumObject extends EnumObject
{
    const REQUESTED = "REQUESTED";
    const IN_PROGRESS = "IN_PROGRESS";
    const COMPLETED = "COMPLETED";
    const FAILED = "FAILED";
}
