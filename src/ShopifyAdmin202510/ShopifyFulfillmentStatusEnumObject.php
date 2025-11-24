<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\EnumObject;

class ShopifyFulfillmentStatusEnumObject extends EnumObject
{
    const SUCCESS = "SUCCESS";
    const CANCELLED = "CANCELLED";
    const ERROR = "ERROR";
    const FAILURE = "FAILURE";
}
