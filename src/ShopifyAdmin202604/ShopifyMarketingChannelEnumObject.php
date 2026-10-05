<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifyMarketingChannelEnumObject extends EnumObject
{
    const SEARCH = "SEARCH";
    const DISPLAY = "DISPLAY";
    const SOCIAL = "SOCIAL";
    const EMAIL = "EMAIL";
    const REFERRAL = "REFERRAL";
}
