<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class FileSortKeysEnumObject extends EnumObject
{
    const CREATED_AT = "CREATED_AT";
    const FILENAME = "FILENAME";
    const ID = "ID";
    const ORIGINAL_UPLOAD_SIZE = "ORIGINAL_UPLOAD_SIZE";
    const RELEVANCE = "RELEVANCE";
    const UPDATED_AT = "UPDATED_AT";
}
