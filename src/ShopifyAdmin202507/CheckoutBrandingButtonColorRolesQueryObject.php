<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingButtonColorRolesQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingButtonColorRoles";

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

    public function selectHover(CheckoutBrandingButtonColorRolesHoverArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingColorRolesQueryObject("hover");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
