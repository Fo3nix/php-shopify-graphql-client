<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingMainQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingMain";

    public function selectBackgroundImage(ShopifyCheckoutBrandingMainBackgroundImageArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingImageQueryObject("backgroundImage");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectColorScheme()
    {
        $this->selectField("colorScheme");

        return $this;
    }

    public function selectDivider(ShopifyCheckoutBrandingMainDividerArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingContainerDividerQueryObject("divider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSection(ShopifyCheckoutBrandingMainSectionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingMainSectionQueryObject("section");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
