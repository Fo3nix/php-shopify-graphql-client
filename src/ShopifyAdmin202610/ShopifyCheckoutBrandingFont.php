<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * A font.
 */
interface ShopifyCheckoutBrandingFont
{
    
    /**
     * The font sources.
     *
     * @return string
     */
    public function getSources(): ?string;

    
    /**
     * The font weight.
     *
     * @return int
     */
    public function getWeight(): ?int;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
