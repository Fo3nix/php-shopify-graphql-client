<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutAndAccountsConfigurationBrandingControlColorRolesQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingControlColorRoles";

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

    public function selectSelected(ShopifyCheckoutAndAccountsConfigurationBrandingControlColorRolesSelectedArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingColorRolesQueryObject("selected");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectText()
    {
        $this->selectField("text");

        return $this;
    }
}
