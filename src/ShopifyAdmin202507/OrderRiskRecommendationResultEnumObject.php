<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class OrderRiskRecommendationResultEnumObject extends EnumObject
{
    const CANCEL = "CANCEL";
    const INVESTIGATE = "INVESTIGATE";
    const ACCEPT = "ACCEPT";
    const NONE = "NONE";
}
