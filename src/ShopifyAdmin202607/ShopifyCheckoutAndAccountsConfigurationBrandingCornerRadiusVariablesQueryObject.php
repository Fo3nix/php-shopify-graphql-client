<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The corner radius variable customizations that define the pixel size of corner radius options.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCornerRadiusVariablesQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingCornerRadiusVariables";

    /**
     * The value in pixels for base corner radii. Example: 5.
     */
    public function selectBase(): static
    {
        $this->selectField("base");

        return $this;
    }

    /**
     * The value in pixels for large corner radii. Example: 10.
     */
    public function selectLarge(): static
    {
        $this->selectField("large");

        return $this;
    }

    /**
     * The value in pixels for small corner radii. Example: 3.
     */
    public function selectSmall(): static
    {
        $this->selectField("small");

        return $this;
    }
}
