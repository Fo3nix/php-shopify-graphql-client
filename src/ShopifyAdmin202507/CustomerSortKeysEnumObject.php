<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class CustomerSortKeysEnumObject extends EnumObject
{
    const CREATED_AT = "CREATED_AT";
    const ID = "ID";
    const LOCATION = "LOCATION";
    const NAME = "NAME";
    const RELEVANCE = "RELEVANCE";
    const UPDATED_AT = "UPDATED_AT";
}
