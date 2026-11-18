<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * The filters used in segment queries associated with a shop.
 */
interface ShopifySegmentFilter
{
    
    /**
     * The localized name of the filter.
     *
     * @return string
     */
    public function getLocalizedName(): ?string;

    
    /**
     * Whether a file can have multiple values for a single customer.
     *
     * @return bool
     */
    public function getMultiValue(): ?bool;

    
    /**
     * The query name of the filter.
     *
     * @return string
     */
    public function getQueryName(): ?string;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
