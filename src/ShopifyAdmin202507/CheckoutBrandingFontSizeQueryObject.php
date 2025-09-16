<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingFontSizeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingFontSize";

    public function selectBase()
    {
        $this->selectField("base");

        return $this;
    }

    public function selectRatio()
    {
        $this->selectField("ratio");

        return $this;
    }
}
