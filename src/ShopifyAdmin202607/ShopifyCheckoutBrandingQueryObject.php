<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBranding";

    public function selectCustomizations(ShopifyCheckoutBrandingCustomizationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingCustomizationsQueryObject("customizations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDesignSystem(ShopifyCheckoutBrandingDesignSystemArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingDesignSystemQueryObject("designSystem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
