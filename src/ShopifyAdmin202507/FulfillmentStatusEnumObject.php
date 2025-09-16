<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class FulfillmentStatusEnumObject extends EnumObject
{
    const SUCCESS = "SUCCESS";
    const CANCELLED = "CANCELLED";
    const ERROR = "ERROR";
    const FAILURE = "FAILURE";
}
