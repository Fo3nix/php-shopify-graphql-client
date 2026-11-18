<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The custom font customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingCustomFont";

    /**
     * Globally unique ID reference to the custom font file.
     */
    public function selectGenericFileId(): static
    {
        $this->selectField("genericFileId");

        return $this;
    }

    /**
     * The font sources.
     */
    public function selectSources(): static
    {
        $this->selectField("sources");

        return $this;
    }

    /**
     * The font weight.
     */
    public function selectWeight(): static
    {
        $this->selectField("weight");

        return $this;
    }
}
