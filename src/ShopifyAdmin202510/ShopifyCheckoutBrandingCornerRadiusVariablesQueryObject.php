<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingCornerRadiusVariablesQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingCornerRadiusVariables";

    public function selectBase()
    {
        $this->selectField("base");

        return $this;
    }

    public function selectLarge()
    {
        $this->selectField("large");

        return $this;
    }

    public function selectSmall()
    {
        $this->selectField("small");

        return $this;
    }
}
