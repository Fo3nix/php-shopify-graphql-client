<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class MarketingChannelEnumObject extends EnumObject
{
    const SEARCH = "SEARCH";
    const DISPLAY = "DISPLAY";
    const SOCIAL = "SOCIAL";
    const EMAIL = "EMAIL";
    const REFERRAL = "REFERRAL";
}
