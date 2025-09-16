<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class AppPricingIntervalEnumObject extends EnumObject
{
    const ANNUAL = "ANNUAL";
    const EVERY_30_DAYS = "EVERY_30_DAYS";
}
