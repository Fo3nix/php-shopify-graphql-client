<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class AbandonedCheckoutSortKeysEnumObject extends EnumObject
{
    const CHECKOUT_ID = "CHECKOUT_ID";
    const CREATED_AT = "CREATED_AT";
    const CUSTOMER_NAME = "CUSTOMER_NAME";
    const ID = "ID";
    const RELEVANCE = "RELEVANCE";
    const TOTAL_PRICE = "TOTAL_PRICE";
}
