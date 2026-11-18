<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Defines visibility status for metaobjects.
 */
class ShopifyMetaobjectStatusEnumObject extends EnumObject
{
    /**
     * The metaobjects is an internal record.
     */
    const DRAFT = "DRAFT";
    /**
     * The metaobjects is active for public use.
     */
    const ACTIVE = "ACTIVE";
}
