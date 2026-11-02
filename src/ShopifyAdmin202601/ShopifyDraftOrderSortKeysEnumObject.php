<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

class ShopifyDraftOrderSortKeysEnumObject extends EnumObject
{
    const CREATED_AT = "CREATED_AT";
    const CUSTOMER_NAME = "CUSTOMER_NAME";
    const ID = "ID";
    const NUMBER = "NUMBER";
    const RELEVANCE = "RELEVANCE";
    const STATUS = "STATUS";
    const TOTAL_PRICE = "TOTAL_PRICE";
    const UPDATED_AT = "UPDATED_AT";
}
