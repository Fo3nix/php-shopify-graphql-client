<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class OrderTransactionStatusEnumObject extends EnumObject
{
    const SUCCESS = "SUCCESS";
    const FAILURE = "FAILURE";
    const PENDING = "PENDING";
    const ERROR = "ERROR";
    const AWAITING_RESPONSE = "AWAITING_RESPONSE";
    const UNKNOWN = "UNKNOWN";
}
