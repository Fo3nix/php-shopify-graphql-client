<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingCartLinkQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingCartLink";

    public function selectVisibility()
    {
        $this->selectField("visibility");

        return $this;
    }
}
