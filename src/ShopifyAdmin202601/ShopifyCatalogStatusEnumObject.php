<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The state of a catalog.
 */
class ShopifyCatalogStatusEnumObject extends EnumObject
{
    /**
     * The catalog is active.
     */
    const ACTIVE = "ACTIVE";
    /**
     * The catalog is archived.
     */
    const ARCHIVED = "ARCHIVED";
    /**
     * The catalog is in draft.
     */
    const DRAFT = "DRAFT";
}
