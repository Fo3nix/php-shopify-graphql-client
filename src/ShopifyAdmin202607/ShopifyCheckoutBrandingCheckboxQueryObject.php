<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

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
