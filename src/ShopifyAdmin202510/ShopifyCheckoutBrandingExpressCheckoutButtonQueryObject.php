<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingExpressCheckoutButtonQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingExpressCheckoutButton";

    public function selectCornerRadius()
    {
        $this->selectField("cornerRadius");

        return $this;
    }
}
