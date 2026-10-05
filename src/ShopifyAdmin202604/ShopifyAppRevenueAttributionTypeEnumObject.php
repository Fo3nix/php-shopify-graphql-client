<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifyAppRevenueAttributionTypeEnumObject extends EnumObject
{
    const APPLICATION_PURCHASE = "APPLICATION_PURCHASE";
    const APPLICATION_SUBSCRIPTION = "APPLICATION_SUBSCRIPTION";
    const APPLICATION_USAGE = "APPLICATION_USAGE";
    const OTHER = "OTHER";
}
