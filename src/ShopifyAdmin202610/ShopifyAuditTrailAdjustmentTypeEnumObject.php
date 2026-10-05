<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifyAuditTrailAdjustmentTypeEnumObject extends EnumObject
{
    const ADDITION = "ADDITION";
    const MULTIPLICATION = "MULTIPLICATION";
    const REPLACEMENT = "REPLACEMENT";
}
