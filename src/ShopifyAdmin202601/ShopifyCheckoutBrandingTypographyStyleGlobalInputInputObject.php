<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to update the global typography customizations.
 */
class ShopifyCheckoutBrandingTypographyStyleGlobalInputInputObject extends InputObject
{
    protected $letterCase;
    protected $kerning;

    /**
     * The letter case.
     */
    public function setLetterCase($shopifyCheckoutBrandingTypographyLetterCase): static
    {
        $this->letterCase = new RawObject($shopifyCheckoutBrandingTypographyLetterCase);

        return $this;
    }

    /**
     * The kerning.
     */
    public function setKerning($shopifyCheckoutBrandingTypographyKerning): static
    {
        $this->kerning = new RawObject($shopifyCheckoutBrandingTypographyKerning);

        return $this;
    }
}
