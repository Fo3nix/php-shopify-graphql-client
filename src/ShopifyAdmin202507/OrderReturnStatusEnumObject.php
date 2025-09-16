<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class OrderReturnStatusEnumObject extends EnumObject
{
    const IN_PROGRESS = "IN_PROGRESS";
    const INSPECTION_COMPLETE = "INSPECTION_COMPLETE";
    const NO_RETURN = "NO_RETURN";
    const RETURNED = "RETURNED";
    const RETURN_FAILED = "RETURN_FAILED";
    const RETURN_REQUESTED = "RETURN_REQUESTED";
}
