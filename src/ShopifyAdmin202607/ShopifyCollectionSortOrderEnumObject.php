<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

class ShopifyCollectionSortOrderEnumObject extends EnumObject
{
    const ALPHA_ASC = "ALPHA_ASC";
    const ALPHA_DESC = "ALPHA_DESC";
    const BEST_SELLING = "BEST_SELLING";
    const MOST_RELEVANT = "MOST_RELEVANT";
    const CREATED = "CREATED";
    const CREATED_DESC = "CREATED_DESC";
    const MANUAL = "MANUAL";
    const PRICE_ASC = "PRICE_ASC";
    const PRICE_DESC = "PRICE_DESC";
}
