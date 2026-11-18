<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The container's divider customizations.
 */
class ShopifyCheckoutBrandingContainerDividerQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingContainerDivider";

    /**
     * The divider style.
     */
    public function selectBorderStyle(): static
    {
        $this->selectField("borderStyle");

        return $this;
    }

    /**
     * The divider width.
     */
    public function selectBorderWidth(): static
    {
        $this->selectField("borderWidth");

        return $this;
    }

    /**
     * The divider visibility.
     */
    public function selectVisibility(): static
    {
        $this->selectField("visibility");

        return $this;
    }
}
