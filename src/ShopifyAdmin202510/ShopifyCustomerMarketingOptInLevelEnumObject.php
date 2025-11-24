<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\EnumObject;

class ShopifyCustomerMarketingOptInLevelEnumObject extends EnumObject
{
    const SINGLE_OPT_IN = "SINGLE_OPT_IN";
    const CONFIRMED_OPT_IN = "CONFIRMED_OPT_IN";
    const UNKNOWN = "UNKNOWN";
}
