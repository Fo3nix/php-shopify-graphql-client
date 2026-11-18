<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The order summary customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingOrderSummaryQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingOrderSummary";

    /**
     * The background image of the order summary container.
     */
    public function selectBackgroundImage(?ShopifyCheckoutAndAccountsConfigurationBrandingOrderSummaryBackgroundImageArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingImageValueUnionObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingImageValueUnionObject("backgroundImage");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The colors customizations.
     */
    public function selectColors(?ShopifyCheckoutAndAccountsConfigurationBrandingOrderSummaryColorsArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject("colors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The order summary container's divider style and visibility.
     */
    public function selectDivider(?ShopifyCheckoutAndAccountsConfigurationBrandingOrderSummaryDividerArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingContainerDividerQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingContainerDividerQueryObject("divider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The order summary sections.
     */
    public function selectSection(?ShopifyCheckoutAndAccountsConfigurationBrandingOrderSummarySectionArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingOrderSummarySectionQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingOrderSummarySectionQueryObject("section");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
