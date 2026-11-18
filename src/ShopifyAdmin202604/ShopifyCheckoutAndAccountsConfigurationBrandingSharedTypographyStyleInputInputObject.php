<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for customizing the shared typography.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSharedTypographyStyleInputInputObject extends InputObject
{
    protected $letterCase;
    protected $kerning;

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
