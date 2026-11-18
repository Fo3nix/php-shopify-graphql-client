<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `ProductVariantRelationshipBulkUpdateUserError`.
 */
class ShopifyProductVariantRelationshipBulkUpdateUserErrorCodeEnumObject extends EnumObject
{
    /**
     * A parent product variant ID or product ID must be provided.
     */
    const PARENT_REQUIRED = "PARENT_REQUIRED";
    /**
     * Unable to create parent product variant.
     */
    const FAILED_TO_CREATE = "FAILED_TO_CREATE";
    /**
     * The product variants were not found.
     */
    const PRODUCT_VARIANTS_NOT_FOUND = "PRODUCT_VARIANTS_NOT_FOUND";
    /**
     * A parent product variant cannot contain itself as a component.
     */
    const CIRCULAR_REFERENCE = "CIRCULAR_REFERENCE";
    /**
     * Nested parent product variants aren't supported.
     */
    const NESTED_PARENT_PRODUCT_VARIANT = "NESTED_PARENT_PRODUCT_VARIANT";
    /**
     * Product variant relationships must have a quantity greater than 0.
     */
    const INVALID_QUANTITY = "INVALID_QUANTITY";
    /**
     * A parent product variant must not contain duplicate product variant relationships.
     */
    const DUPLICATE_PRODUCT_VARIANT_RELATIONSHIP = "DUPLICATE_PRODUCT_VARIANT_RELATIONSHIP";
    /**
     * Exceeded the maximum allowable product variant relationships in a parent product variant.
     */
    const EXCEEDED_PRODUCT_VARIANT_RELATIONSHIP_LIMIT = "EXCEEDED_PRODUCT_VARIANT_RELATIONSHIP_LIMIT";
    /**
     * A Core type relationship cannot be added to a composite product variant with SFN type relationships.
     */
    const PRODUCT_VARIANT_RELATIONSHIP_TYPE_CONFLICT = "PRODUCT_VARIANT_RELATIONSHIP_TYPE_CONFLICT";
    /**
     * Unexpected error.
     */
    const UNEXPECTED_ERROR = "UNEXPECTED_ERROR";
    /**
     * Unable to remove product variant relationships.
     */
    const FAILED_TO_REMOVE = "FAILED_TO_REMOVE";
    /**
     * The product variant relationships to remove must be specified if all the parent product variant's components aren't being removed.
     */
    const MUST_SPECIFY_COMPONENTS = "MUST_SPECIFY_COMPONENTS";
    /**
     * Unable to update product variant relationships.
     */
    const FAILED_TO_UPDATE = "FAILED_TO_UPDATE";
    /**
     * Unable to update parent product variant price.
     */
    const FAILED_TO_UPDATE_PARENT_PRODUCT_VARIANT_PRICE = "FAILED_TO_UPDATE_PARENT_PRODUCT_VARIANT_PRICE";
    /**
     * A price must be provided for a parent product variant if the price calculation is set to fixed.
     */
    const UPDATE_PARENT_VARIANT_PRICE_REQUIRED = "UPDATE_PARENT_VARIANT_PRICE_REQUIRED";
    /**
     * Some of the provided product variants are not components of the specified parent product variant.
     */
    const PRODUCT_VARIANTS_NOT_COMPONENTS = "PRODUCT_VARIANTS_NOT_COMPONENTS";
    /**
     * The products for these product variants are already owned by another App.
     */
    const PRODUCT_EXPANDER_APP_OWNERSHIP_ALREADY_EXISTS = "PRODUCT_EXPANDER_APP_OWNERSHIP_ALREADY_EXISTS";
    /**
     * Multipack bundles are not supported.
     */
    const UNSUPPORTED_MULTIPACK_RELATIONSHIP = "UNSUPPORTED_MULTIPACK_RELATIONSHIP";
    /**
     * Gift cards cannot be parent product variants.
     */
    const PARENT_PRODUCT_VARIANT_CANNOT_BE_GIFT_CARD = "PARENT_PRODUCT_VARIANT_CANNOT_BE_GIFT_CARD";
    /**
     * Parent product variants cannot require a selling plan.
     */
    const PARENT_PRODUCT_VARIANT_CANNOT_REQUIRE_SELLING_PLAN = "PARENT_PRODUCT_VARIANT_CANNOT_REQUIRE_SELLING_PLAN";
    /**
     * Combined listing cannot be parent product variants.
     */
    const PARENT_PRODUCT_VARIANT_CANNOT_BE_COMBINED_LISTING = "PARENT_PRODUCT_VARIANT_CANNOT_BE_COMBINED_LISTING";
    /**
     * Combined listing cannot be child product variants.
     */
    const CHILD_PRODUCT_VARIANT_CANNOT_BE_COMBINED_LISTING = "CHILD_PRODUCT_VARIANT_CANNOT_BE_COMBINED_LISTING";
}
