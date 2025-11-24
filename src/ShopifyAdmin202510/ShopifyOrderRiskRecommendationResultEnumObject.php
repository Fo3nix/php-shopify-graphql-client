<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\EnumObject;

class ShopifyOrderRiskRecommendationResultEnumObject extends EnumObject
{
    const CANCEL = "CANCEL";
    const INVESTIGATE = "INVESTIGATE";
    const ACCEPT = "ACCEPT";
    const NONE = "NONE";
}
