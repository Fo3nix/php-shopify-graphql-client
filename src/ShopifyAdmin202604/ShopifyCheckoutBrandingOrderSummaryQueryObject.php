<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingOrderSummaryQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingOrderSummary";

    public function selectBackgroundImage(ShopifyCheckoutBrandingOrderSummaryBackgroundImageArgumentsObject $argsObject = null)
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

    public function selectDivider(ShopifyCheckoutBrandingOrderSummaryDividerArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingContainerDividerQueryObject("divider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSection(ShopifyCheckoutBrandingOrderSummarySectionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingOrderSummarySectionQueryObject("section");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
