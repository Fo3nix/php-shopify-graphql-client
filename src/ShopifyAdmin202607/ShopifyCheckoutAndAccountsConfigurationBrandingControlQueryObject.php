<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The form controls customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingControlQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingControl";

    /**
     * The border.
     */
    public function selectBorder(): static
    {
        $this->selectField("border");

        return $this;
    }

    /**
     * The corner radius.
     */
    public function selectCornerRadius(): static
    {
        $this->selectField("cornerRadius");

        return $this;
    }

    /**
     * The label position.
     */
    public function selectLabelPosition(): static
    {
        $this->selectField("labelPosition");

        return $this;
    }
}
