<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingCartLinkQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingCartLink";

    public function selectVisibility()
    {
        $this->selectField("visibility");

        return $this;
    }
}
