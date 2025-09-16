<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingChoiceListGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingChoiceListGroup";

    public function selectSpacing()
    {
        $this->selectField("spacing");

        return $this;
    }
}
