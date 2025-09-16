<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class ProductSortKeysEnumObject extends EnumObject
{
    const CREATED_AT = "CREATED_AT";
    const ID = "ID";
    const INVENTORY_TOTAL = "INVENTORY_TOTAL";
    const PRODUCT_TYPE = "PRODUCT_TYPE";
    const PUBLISHED_AT = "PUBLISHED_AT";
    const RELEVANCE = "RELEVANCE";
    const TITLE = "TITLE";
    const UPDATED_AT = "UPDATED_AT";
    const VENDOR = "VENDOR";
}
