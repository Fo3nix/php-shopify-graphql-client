<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The shared typography customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSharedTypographyStyleQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingSharedTypographyStyle";

    /**
     * The kerning.
     */
    public function selectKerning(): static
    {
        $this->selectField("kerning");

        return $this;
    }

    /**
     * The letter case.
     */
    public function selectLetterCase(): static
    {
        $this->selectField("letterCase");

        return $this;
    }
}
