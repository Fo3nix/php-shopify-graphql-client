<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The valid values for the bulk operation's type.
 */
class ShopifyBulkOperationTypeEnumObject extends EnumObject
{
    /**
     * The bulk operation is a query.
     */
    const QUERY = "QUERY";
    /**
     * The bulk operation is a mutation.
     */
    const MUTATION = "MUTATION";
}
