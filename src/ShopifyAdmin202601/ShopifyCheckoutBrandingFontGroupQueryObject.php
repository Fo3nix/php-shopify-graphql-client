<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingFontGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingFontGroup";

    public function selectLoadingStrategy()
    {
        $this->selectField("loadingStrategy");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }
}
