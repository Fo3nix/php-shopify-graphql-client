<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

class ShopifyReverseFulfillmentOrderDispositionTypeEnumObject extends EnumObject
{
    const RESTOCKED = "RESTOCKED";
    const PROCESSING_REQUIRED = "PROCESSING_REQUIRED";
    const NOT_RESTOCKED = "NOT_RESTOCKED";
    const MISSING = "MISSING";
}
