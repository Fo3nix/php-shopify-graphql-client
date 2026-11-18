<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldDefinition;

/**
 * A condition that determines which products should be included in a collection.
 *
 * This is an interface implemented by a concrete type per condition kind (for example,
 * `CollectionSourceInclusionConditionProductTag` or `CollectionSourceInclusionConditionVariantTitle`).
 * Fields such as `relation` are defined on each concrete type and return a type-specific enum (for example,
 * `CollectionSourceInclusionConditionProductTagRelation` versus
 * `CollectionSourceInclusionConditionVariantTitleRelation`). Conditions are mutually exclusive concrete
 * types, but may contain overlapping field names such as `relation`. If your GraphQL tooling flags these
 * as ambiguous, give each field a distinct alias (for example, `tagRelation: relation` and
 * `variantTitleRelation: relation`) or use inline fragments.
 */
interface ShopifyCollectionSourceInclusionConditionMetafield extends ShopifyCollectionSourceInclusionCondition
{
    
    /**
     * The metafield definition to use for the condition.
     *
     * @return ShopifyMetafieldDefinition
     */
    public function getDefinition(): ?ShopifyMetafieldDefinition;

    
    /**
     * The unique identifier for this condition.
     *
     * @return string
     */
    public function getId(): ?string;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
