<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The font size customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingFontSizeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingFontSize";

    /**
     * The base font size.
     */
    public function selectBase(): static
    {
        $this->selectField("base");

        return $this;
    }

    /**
     * The scale ratio used to derive all font sizes such as small and large.
     */
    public function selectRatio(): static
    {
        $this->selectField("ratio");

        return $this;
    }
}
