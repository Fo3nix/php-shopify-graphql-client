<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `PublicationUserError`.
 */
class ShopifyPublicationUserErrorCodeEnumObject extends EnumObject
{
    /**
     * Can't perform this action on a publication.
     */
    const UNSUPPORTED_PUBLICATION_ACTION = "UNSUPPORTED_PUBLICATION_ACTION";
    /**
     * Publication not found.
     */
    const PUBLICATION_NOT_FOUND = "PUBLICATION_NOT_FOUND";
    /**
     * The publication is currently being modified. Please try again later.
     */
    const PUBLICATION_LOCKED = "PUBLICATION_LOCKED";
    /**
     * A catalog publication can only contain products.
     */
    const UNSUPPORTED_PUBLISHABLE_TYPE = "UNSUPPORTED_PUBLISHABLE_TYPE";
    /**
     * Publishable ID not found.
     */
    const INVALID_PUBLISHABLE_ID = "INVALID_PUBLISHABLE_ID";
    /**
     * Market does not exist.
     */
    const MARKET_NOT_FOUND = "MARKET_NOT_FOUND";
    /**
     * Catalog does not exist.
     */
    const CATALOG_NOT_FOUND = "CATALOG_NOT_FOUND";
    /**
     * Can't modify a publication that belongs to an app catalog.
     */
    const CANNOT_MODIFY_APP_CATALOG_PUBLICATION = "CANNOT_MODIFY_APP_CATALOG_PUBLICATION";
    /**
     * Can't modify a publication that belongs to a market catalog.
     */
    const CANNOT_MODIFY_MARKET_CATALOG_PUBLICATION = "CANNOT_MODIFY_MARKET_CATALOG_PUBLICATION";
    /**
     * Cannot modify a catalog for an app.
     */
    const CANNOT_MODIFY_APP_CATALOG = "CANNOT_MODIFY_APP_CATALOG";
    /**
     * Cannot modify a catalog for a market.
     */
    const CANNOT_MODIFY_MARKET_CATALOG = "CANNOT_MODIFY_MARKET_CATALOG";
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The input value is already taken.
     */
    const TAKEN = "TAKEN";
    /**
     * The input value is too long.
     */
    const TOO_LONG = "TOO_LONG";
    /**
     * The input value is too short.
     */
    const TOO_SHORT = "TOO_SHORT";
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * A product publication cannot be created because the catalog type associated with this publication does not permit publications of this product type.
     */
    const PRODUCT_TYPE_INCOMPATIBLE_WITH_CATALOG_TYPE = "PRODUCT_TYPE_INCOMPATIBLE_WITH_CATALOG_TYPE";
    /**
     * The limit for simultaneous publication updates has been exceeded.
     */
    const PUBLICATION_UPDATE_LIMIT_EXCEEDED = "PUBLICATION_UPDATE_LIMIT_EXCEEDED";
    /**
     * Products and variants cannot be updated together.
     */
    const CANNOT_COMBINE_PRODUCTS_AND_VARIANTS = "CANNOT_COMBINE_PRODUCTS_AND_VARIANTS";
    /**
     * Variants in a single operation must belong to the same product.
     */
    const VARIANTS_BELONG_TO_MULTIPLE_PRODUCTS = "VARIANTS_BELONG_TO_MULTIPLE_PRODUCTS";
    /**
     * The product is currently being modified. Please try again later.
     */
    const PRODUCT_LOCK_ERROR = "PRODUCT_LOCK_ERROR";
    /**
     * Variant publishing is not supported for this product type.
     */
    const VARIANT_PUBLISHING_UNSUPPORTED_PRODUCT_TYPE = "VARIANT_PUBLISHING_UNSUPPORTED_PRODUCT_TYPE";
}
