<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

class ShopifyBulkOperationTypeEnumObject extends EnumObject
{
    const QUERY = "QUERY";
    const MUTATION = "MUTATION";
}
