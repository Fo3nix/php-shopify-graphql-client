<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The customizations for the page, content, main, and order summary dividers.
 */
class ShopifyCheckoutBrandingDividerStyleQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingDividerStyle";

    /**
     * The border style for the divider.
     */
    public function selectBorderStyle(): static
    {
        $this->selectField("borderStyle");

        return $this;
    }

    /**
     * The border width for the divider.
     */
    public function selectBorderWidth(): static
    {
        $this->selectField("borderWidth");

        return $this;
    }
}
