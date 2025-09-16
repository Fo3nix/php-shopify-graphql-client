<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingCornerRadiusVariablesQueryObject extends QueryObject
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
