<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingFooterContentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingFooterContent";

    public function selectVisibility()
    {
        $this->selectField("visibility");

        return $this;
    }
}
