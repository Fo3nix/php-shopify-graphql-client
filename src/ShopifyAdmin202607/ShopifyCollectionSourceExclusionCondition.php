<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * A condition that determines which products should be excluded from a collection.
 */
interface ShopifyCollectionSourceExclusionCondition
{
    
    /**
     * The unique identifier for this exclusion condition.
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
