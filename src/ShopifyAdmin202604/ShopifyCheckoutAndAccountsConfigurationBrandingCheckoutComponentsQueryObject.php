<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The checkout-specific component customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutComponentsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingCheckoutComponents";

    /**
     * The customizations for the breadcrumbs that represent a buyer's journey to the checkout.
     */
    public function selectBuyerJourney(?ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutComponentsBuyerJourneyArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingBuyerJourneyQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingBuyerJourneyQueryObject("buyerJourney");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The checkout cart link customizations. For example, by setting the visibility field to `HIDDEN`, you can hide the cart icon in the header for one-page checkout, and the cart link in breadcrumbs in three-page checkout.
     */
    public function selectCartLink(?ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutComponentsCartLinkArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingCartLinkQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingCartLinkQueryObject("cartLink");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The content container customizations.
     */
    public function selectContent(?ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutComponentsContentArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingContentQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingContentQueryObject("content");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The express checkout customizations.
     */
    public function selectExpressCheckout(?ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutComponentsExpressCheckoutArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingExpressCheckoutQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingExpressCheckoutQueryObject("expressCheckout");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The checkout footer customizations.
     */
    public function selectFooter(?ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutComponentsFooterArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutFooterQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutFooterQueryObject("footer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The checkout header customizations.
     */
    public function selectHeader(?ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutComponentsHeaderArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutHeaderQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutHeaderQueryObject("header");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The main checkout customizations.
     */
    public function selectMain(?ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutComponentsMainArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingMainQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingMainQueryObject("main");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The order summary customizations.
     */
    public function selectOrderSummary(?ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutComponentsOrderSummaryArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingOrderSummaryQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingOrderSummaryQueryObject("orderSummary");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
