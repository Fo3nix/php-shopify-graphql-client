<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

class ShopifyCustomerMergeRequestStatusEnumObject extends EnumObject
{
    const REQUESTED = "REQUESTED";
    const IN_PROGRESS = "IN_PROGRESS";
    const COMPLETED = "COMPLETED";
    const FAILED = "FAILED";
}
