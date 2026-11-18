<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CollectionAddProductsV2UserError`.
 */
class ShopifyCollectionAddProductsV2UserErrorCodeEnumObject extends EnumObject
{
    /**
     * Can't manually add products to a smart collection.
     */
    const CANT_ADD_TO_SMART_COLLECTION = "CANT_ADD_TO_SMART_COLLECTION";
    /**
     * Collection doesn't exist.
     */
    const COLLECTION_DOES_NOT_EXIST = "COLLECTION_DOES_NOT_EXIST";
}
