<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingDividerStyleQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingDividerStyle";

    public function selectBorderStyle()
    {
        $this->selectField("borderStyle");

        return $this;
    }

    public function selectBorderWidth()
    {
        $this->selectField("borderWidth");

        return $this;
    }
}
