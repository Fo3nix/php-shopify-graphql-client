<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifyDiscountApplicationTargetSelectionEnumObject extends EnumObject
{
    const ALL = "ALL";
    const ENTITLED = "ENTITLED";
    const EXPLICIT = "EXPLICIT";
}
