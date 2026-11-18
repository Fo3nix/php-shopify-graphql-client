<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The order summary customizations.
 */
class ShopifyCheckoutBrandingOrderSummaryQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingOrderSummary";

    /**
     * The background image of the order summary container.
     */
    public function selectBackgroundImage(?ShopifyCheckoutBrandingOrderSummaryBackgroundImageArgumentsObject $argsObject = null): ShopifyCheckoutBrandingImageQueryObject
    {
        $object = new ShopifyCheckoutBrandingImageQueryObject("backgroundImage");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The selected color scheme of the order summary container.
     */
    public function selectColorScheme(): static
    {
        $this->selectField("colorScheme");

        return $this;
    }

    /**
     * The order summary container's divider style and visibility.
     */
    public function selectDivider(?ShopifyCheckoutBrandingOrderSummaryDividerArgumentsObject $argsObject = null): ShopifyCheckoutBrandingContainerDividerQueryObject
    {
        $object = new ShopifyCheckoutBrandingContainerDividerQueryObject("divider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The settings for the order summary sections.
     */
    public function selectSection(?ShopifyCheckoutBrandingOrderSummarySectionArgumentsObject $argsObject = null): ShopifyCheckoutBrandingOrderSummarySectionQueryObject
    {
        $object = new ShopifyCheckoutBrandingOrderSummarySectionQueryObject("section");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
