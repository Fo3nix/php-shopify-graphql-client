<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for customizing the typography.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingTypographyStyleInputInputObject extends InputObject
{
    protected $font;
    protected $size;
    protected $weight;
    protected $letterCase;
    protected $kerning;

    /**
     * The font.
     */
    public function setFont($shopifyCheckoutAndAccountsConfigurationBrandingTypographyFont): static
    {
        $this->font = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingTypographyFont);

        return $this;
    }

    /**
     * The font size.
     */
    public function setSize($shopifyCheckoutAndAccountsConfigurationBrandingTypographySize): static
    {
        $this->size = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingTypographySize);

        return $this;
    }

    /**
     * The font weight.
     */
    public function setWeight($shopifyCheckoutAndAccountsConfigurationBrandingTypographyWeight): static
    {
        $this->weight = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingTypographyWeight);

        return $this;
    }

    /**
     * The letter case.
     */
    public function setLetterCase($shopifyCheckoutAndAccountsConfigurationBrandingTypographyLetterCase): static
    {
        $this->letterCase = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingTypographyLetterCase);

        return $this;
    }

    /**
     * The kerning.
     */
    public function setKerning($shopifyCheckoutAndAccountsConfigurationBrandingTypographyKerning): static
    {
        $this->kerning = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingTypographyKerning);

        return $this;
    }
}
