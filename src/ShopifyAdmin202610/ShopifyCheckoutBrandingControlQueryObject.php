<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingControlQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingControl";

    public function selectBorder()
    {
        $this->selectField("border");

        return $this;
    }

    public function selectColor()
    {
        $this->selectField("color");

        return $this;
    }

    public function selectCornerRadius()
    {
        $this->selectField("cornerRadius");

        return $this;
    }

    public function selectLabelPosition()
    {
        $this->selectField("labelPosition");

        return $this;
    }
}
