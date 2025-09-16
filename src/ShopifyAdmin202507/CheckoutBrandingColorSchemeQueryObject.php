<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingColorSchemeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingColorScheme";

    public function selectBase(CheckoutBrandingColorSchemeBaseArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingColorRolesQueryObject("base");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectControl(CheckoutBrandingColorSchemeControlArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingControlColorRolesQueryObject("control");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPrimaryButton(CheckoutBrandingColorSchemePrimaryButtonArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingButtonColorRolesQueryObject("primaryButton");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSecondaryButton(CheckoutBrandingColorSchemeSecondaryButtonArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingButtonColorRolesQueryObject("secondaryButton");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
