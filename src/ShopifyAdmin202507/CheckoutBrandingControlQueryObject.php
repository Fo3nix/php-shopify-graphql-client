<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingControlQueryObject extends QueryObject
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
