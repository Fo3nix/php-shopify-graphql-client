<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingFooterContentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingFooterContent";

    public function selectVisibility()
    {
        $this->selectField("visibility");

        return $this;
    }
}
