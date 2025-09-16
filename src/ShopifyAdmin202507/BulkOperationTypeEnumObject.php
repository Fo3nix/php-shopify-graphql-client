<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class BulkOperationTypeEnumObject extends EnumObject
{
    const QUERY = "QUERY";
    const MUTATION = "MUTATION";
}
