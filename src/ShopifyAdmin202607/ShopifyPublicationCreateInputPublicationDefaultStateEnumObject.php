<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The input fields for the possible values for the default state of a publication.
 */
class ShopifyPublicationCreateInputPublicationDefaultStateEnumObject extends EnumObject
{
    /**
     * The publication is empty.
     */
    const EMPTY = "EMPTY";
    /**
     * The publication is populated with all products.
     */
    const ALL_PRODUCTS = "ALL_PRODUCTS";
}
