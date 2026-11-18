<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The global typography customizations.
 */
class ShopifyCheckoutBrandingTypographyStyleGlobalQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingTypographyStyleGlobal";

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
