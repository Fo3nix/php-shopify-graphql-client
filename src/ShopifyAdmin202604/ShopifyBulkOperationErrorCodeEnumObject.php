<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifyBulkOperationErrorCodeEnumObject extends EnumObject
{
    const ACCESS_DENIED = "ACCESS_DENIED";
    const INTERNAL_SERVER_ERROR = "INTERNAL_SERVER_ERROR";
    const TIMEOUT = "TIMEOUT";
}
