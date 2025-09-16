<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingExpressCheckoutButtonQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingExpressCheckoutButton";

    public function selectCornerRadius()
    {
        $this->selectField("cornerRadius");

        return $this;
    }
}
