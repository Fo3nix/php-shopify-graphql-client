<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

class ShopifyCustomerMergeRequestStatusEnumObject extends EnumObject
{
    const REQUESTED = "REQUESTED";
    const IN_PROGRESS = "IN_PROGRESS";
    const COMPLETED = "COMPLETED";
    const FAILED = "FAILED";
}
