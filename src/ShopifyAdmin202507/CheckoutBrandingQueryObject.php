<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBranding";

    public function selectCustomizations(CheckoutBrandingCustomizationsArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingCustomizationsQueryObject("customizations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDesignSystem(CheckoutBrandingDesignSystemArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingDesignSystemQueryObject("designSystem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
