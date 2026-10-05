<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingColorSchemeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingColorScheme";

    public function selectBase(ShopifyCheckoutBrandingColorSchemeBaseArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingColorRolesQueryObject("base");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectControl(ShopifyCheckoutBrandingColorSchemeControlArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingControlColorRolesQueryObject("control");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPrimaryButton(ShopifyCheckoutBrandingColorSchemePrimaryButtonArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingButtonColorRolesQueryObject("primaryButton");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSecondaryButton(ShopifyCheckoutBrandingColorSchemeSecondaryButtonArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingButtonColorRolesQueryObject("secondaryButton");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
