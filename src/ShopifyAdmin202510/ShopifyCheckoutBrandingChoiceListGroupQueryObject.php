<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingChoiceListGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingChoiceListGroup";

    public function selectSpacing()
    {
        $this->selectField("spacing");

        return $this;
    }
}
