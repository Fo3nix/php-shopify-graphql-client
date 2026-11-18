<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The supported subject types of deletion events.
 */
class ShopifyDeletionEventSubjectTypeEnumObject extends EnumObject
{
    const COLLECTION = "COLLECTION";
    const PRODUCT = "PRODUCT";
}
