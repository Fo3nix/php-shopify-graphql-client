<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifyOrderTransactionStatusEnumObject extends EnumObject
{
    const SUCCESS = "SUCCESS";
    const FAILURE = "FAILURE";
    const PENDING = "PENDING";
    const ERROR = "ERROR";
    const AWAITING_RESPONSE = "AWAITING_RESPONSE";
    const UNKNOWN = "UNKNOWN";
}
