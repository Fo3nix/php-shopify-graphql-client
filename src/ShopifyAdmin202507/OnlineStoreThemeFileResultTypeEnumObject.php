<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class OnlineStoreThemeFileResultTypeEnumObject extends EnumObject
{
    const SUCCESS = "SUCCESS";
    const ERROR = "ERROR";
    const CONFLICT = "CONFLICT";
    const UNPROCESSABLE_ENTITY = "UNPROCESSABLE_ENTITY";
    const BAD_REQUEST = "BAD_REQUEST";
    const TIMEOUT = "TIMEOUT";
    const NOT_FOUND = "NOT_FOUND";
}
