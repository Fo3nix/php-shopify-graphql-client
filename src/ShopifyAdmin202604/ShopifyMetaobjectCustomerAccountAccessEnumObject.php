<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Metaobject access permissions for the Customer Account API.
 */
class ShopifyMetaobjectCustomerAccountAccessEnumObject extends EnumObject
{
    /**
     * No access.
     */
    const NONE = "NONE";
    /**
     * Read-only access.
     */
    const READ = "READ";
}
