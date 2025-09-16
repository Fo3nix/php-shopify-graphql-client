<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class DraftOrderSortKeysEnumObject extends EnumObject
{
    const CUSTOMER_NAME = "CUSTOMER_NAME";
    const ID = "ID";
    const NUMBER = "NUMBER";
    const RELEVANCE = "RELEVANCE";
    const STATUS = "STATUS";
    const TOTAL_PRICE = "TOTAL_PRICE";
    const UPDATED_AT = "UPDATED_AT";
}
