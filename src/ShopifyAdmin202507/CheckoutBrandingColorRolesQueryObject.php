<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingColorRolesQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingColorRoles";

    public function selectAccent()
    {
        $this->selectField("accent");

        return $this;
    }

    public function selectBackground()
    {
        $this->selectField("background");

        return $this;
    }

    public function selectBorder()
    {
        $this->selectField("border");

        return $this;
    }

    public function selectDecorative()
    {
        $this->selectField("decorative");

        return $this;
    }

    public function selectIcon()
    {
        $this->selectField("icon");

        return $this;
    }

    public function selectText()
    {
        $this->selectField("text");

        return $this;
    }
}
