<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class ProductCollectionSortKeysEnumObject extends EnumObject
{
    const BEST_SELLING = "BEST_SELLING";
    const COLLECTION_DEFAULT = "COLLECTION_DEFAULT";
    const CREATED = "CREATED";
    const ID = "ID";
    const MANUAL = "MANUAL";
    const PRICE = "PRICE";
    const RELEVANCE = "RELEVANCE";
    const TITLE = "TITLE";
}
