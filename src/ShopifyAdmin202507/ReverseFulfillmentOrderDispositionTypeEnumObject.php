<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class ReverseFulfillmentOrderDispositionTypeEnumObject extends EnumObject
{
    const RESTOCKED = "RESTOCKED";
    const PROCESSING_REQUIRED = "PROCESSING_REQUIRED";
    const NOT_RESTOCKED = "NOT_RESTOCKED";
    const MISSING = "MISSING";
}
