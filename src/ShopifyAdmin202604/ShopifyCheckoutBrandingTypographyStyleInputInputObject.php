<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to update the typography customizations.
 */
class ShopifyCheckoutBrandingTypographyStyleInputInputObject extends InputObject
{
    protected $font;
    protected $size;
    protected $weight;
    protected $letterCase;
    protected $kerning;

    /**
     * The font.
     */
    public function setFont($shopifyCheckoutBrandingTypographyFont): static
    {
        $this->font = new RawObject($shopifyCheckoutBrandingTypographyFont);

        return $this;
    }

    /**
     * The font size.
     */
    public function setSize($shopifyCheckoutBrandingTypographySize): static
    {
        $this->size = new RawObject($shopifyCheckoutBrandingTypographySize);

        return $this;
    }

    /**
     * The font weight.
     */
    public function setWeight($shopifyCheckoutBrandingTypographyWeight): static
    {
        $this->weight = new RawObject($shopifyCheckoutBrandingTypographyWeight);

        return $this;
    }

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
