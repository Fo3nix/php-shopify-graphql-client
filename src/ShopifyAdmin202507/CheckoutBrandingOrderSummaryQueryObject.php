<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingOrderSummaryQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingOrderSummary";

    public function selectBackgroundImage(CheckoutBrandingOrderSummaryBackgroundImageArgumentsObject $argsObject = null)
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

    public function selectDivider(CheckoutBrandingOrderSummaryDividerArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingContainerDividerQueryObject("divider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSection(CheckoutBrandingOrderSummarySectionArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingOrderSummarySectionQueryObject("section");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
