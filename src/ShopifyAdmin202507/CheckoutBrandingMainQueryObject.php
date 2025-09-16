<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingMainQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingMain";

    public function selectBackgroundImage(CheckoutBrandingMainBackgroundImageArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingImageQueryObject("backgroundImage");
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

    public function selectDivider(CheckoutBrandingMainDividerArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingContainerDividerQueryObject("divider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSection(CheckoutBrandingMainSectionArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingMainSectionQueryObject("section");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
