<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class DiscountApplicationTargetSelectionEnumObject extends EnumObject
{
    const ALL = "ALL";
    const ENTITLED = "ENTITLED";
    const EXPLICIT = "EXPLICIT";
}
