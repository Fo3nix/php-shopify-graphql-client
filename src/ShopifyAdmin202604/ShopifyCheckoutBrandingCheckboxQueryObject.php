<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingCheckboxQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingCheckbox";

    public function selectCornerRadius()
    {
        $this->selectField("cornerRadius");

        return $this;
    }
}
