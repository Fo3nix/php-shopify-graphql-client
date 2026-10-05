<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingContainerDividerQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingContainerDivider";

    public function selectBorderStyle()
    {
        $this->selectField("borderStyle");

        return $this;
    }

    public function selectBorderWidth()
    {
        $this->selectField("borderWidth");

        return $this;
    }

    public function selectVisibility()
    {
        $this->selectField("visibility");

        return $this;
    }
}
