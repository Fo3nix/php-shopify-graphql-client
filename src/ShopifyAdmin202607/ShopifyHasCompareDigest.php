<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * Represents a summary of the current version of data in a resource.
 *
 * The `compare_digest` field can be used as input for mutations that implement a compare-and-swap mechanism.
 */
interface ShopifyHasCompareDigest
{
    
    /**
     * The data stored in the resource, represented as a digest.
     *
     * @return string
     */
    public function getCompareDigest(): ?string;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
