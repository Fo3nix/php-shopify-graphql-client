<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The customizations that apply to specific components or areas of the user interface.
 */
class ShopifyCheckoutBrandingCustomizationsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingCustomizations";

    /**
     * The customizations for the breadcrumbs that represent a buyer's journey to the checkout.
     */
    public function selectBuyerJourney(?ShopifyCheckoutBrandingCustomizationsBuyerJourneyArgumentsObject $argsObject = null): ShopifyCheckoutBrandingBuyerJourneyQueryObject
    {
        $object = new ShopifyCheckoutBrandingBuyerJourneyQueryObject("buyerJourney");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The checkout cart link customizations. For example, by setting the visibility field to `HIDDEN`, you can hide the cart icon in the header for one-page checkout, and the cart link in breadcrumbs in three-page checkout.
     */
    public function selectCartLink(?ShopifyCheckoutBrandingCustomizationsCartLinkArgumentsObject $argsObject = null): ShopifyCheckoutBrandingCartLinkQueryObject
    {
        $object = new ShopifyCheckoutBrandingCartLinkQueryObject("cartLink");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The checkboxes customizations.
     */
    public function selectCheckbox(?ShopifyCheckoutBrandingCustomizationsCheckboxArgumentsObject $argsObject = null): ShopifyCheckoutBrandingCheckboxQueryObject
    {
        $object = new ShopifyCheckoutBrandingCheckboxQueryObject("checkbox");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The choice list customizations.
     */
    public function selectChoiceList(?ShopifyCheckoutBrandingCustomizationsChoiceListArgumentsObject $argsObject = null): ShopifyCheckoutBrandingChoiceListQueryObject
    {
        $object = new ShopifyCheckoutBrandingChoiceListQueryObject("choiceList");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The content container customizations.
     */
    public function selectContent(?ShopifyCheckoutBrandingCustomizationsContentArgumentsObject $argsObject = null): ShopifyCheckoutBrandingContentQueryObject
    {
        $object = new ShopifyCheckoutBrandingContentQueryObject("content");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The form controls customizations.
     */
    public function selectControl(?ShopifyCheckoutBrandingCustomizationsControlArgumentsObject $argsObject = null): ShopifyCheckoutBrandingControlQueryObject
    {
        $object = new ShopifyCheckoutBrandingControlQueryObject("control");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The customizations for the page, content, main, and order summary dividers. For example, by setting the borderStyle to `DOTTED`, you can make these dividers render as dotted lines.
     */
    public function selectDivider(?ShopifyCheckoutBrandingCustomizationsDividerArgumentsObject $argsObject = null): ShopifyCheckoutBrandingDividerStyleQueryObject
    {
        $object = new ShopifyCheckoutBrandingDividerStyleQueryObject("divider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The express checkout customizations.
     */
    public function selectExpressCheckout(?ShopifyCheckoutBrandingCustomizationsExpressCheckoutArgumentsObject $argsObject = null): ShopifyCheckoutBrandingExpressCheckoutQueryObject
    {
        $object = new ShopifyCheckoutBrandingExpressCheckoutQueryObject("expressCheckout");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The favicon image.
     */
    public function selectFavicon(?ShopifyCheckoutBrandingCustomizationsFaviconArgumentsObject $argsObject = null): ShopifyCheckoutBrandingImageQueryObject
    {
        $object = new ShopifyCheckoutBrandingImageQueryObject("favicon");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The footer customizations.
     */
    public function selectFooter(?ShopifyCheckoutBrandingCustomizationsFooterArgumentsObject $argsObject = null): ShopifyCheckoutBrandingFooterQueryObject
    {
        $object = new ShopifyCheckoutBrandingFooterQueryObject("footer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The global customizations.
     */
    public function selectGlobal(?ShopifyCheckoutBrandingCustomizationsGlobalArgumentsObject $argsObject = null): ShopifyCheckoutBrandingGlobalQueryObject
    {
        $object = new ShopifyCheckoutBrandingGlobalQueryObject("global");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The header customizations.
     */
    public function selectHeader(?ShopifyCheckoutBrandingCustomizationsHeaderArgumentsObject $argsObject = null): ShopifyCheckoutBrandingHeaderQueryObject
    {
        $object = new ShopifyCheckoutBrandingHeaderQueryObject("header");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The Heading Level 1 customizations.
     */
    public function selectHeadingLevel1(?ShopifyCheckoutBrandingCustomizationsHeadingLevel1ArgumentsObject $argsObject = null): ShopifyCheckoutBrandingHeadingLevelQueryObject
    {
        $object = new ShopifyCheckoutBrandingHeadingLevelQueryObject("headingLevel1");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The Heading Level 2 customizations.
     */
    public function selectHeadingLevel2(?ShopifyCheckoutBrandingCustomizationsHeadingLevel2ArgumentsObject $argsObject = null): ShopifyCheckoutBrandingHeadingLevelQueryObject
    {
        $object = new ShopifyCheckoutBrandingHeadingLevelQueryObject("headingLevel2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The Heading Level 3 customizations.
     */
    public function selectHeadingLevel3(?ShopifyCheckoutBrandingCustomizationsHeadingLevel3ArgumentsObject $argsObject = null): ShopifyCheckoutBrandingHeadingLevelQueryObject
    {
        $object = new ShopifyCheckoutBrandingHeadingLevelQueryObject("headingLevel3");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The main area customizations.
     */
    public function selectMain(?ShopifyCheckoutBrandingCustomizationsMainArgumentsObject $argsObject = null): ShopifyCheckoutBrandingMainQueryObject
    {
        $object = new ShopifyCheckoutBrandingMainQueryObject("main");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The merchandise thumbnails customizations.
     */
    public function selectMerchandiseThumbnail(?ShopifyCheckoutBrandingCustomizationsMerchandiseThumbnailArgumentsObject $argsObject = null): ShopifyCheckoutBrandingMerchandiseThumbnailQueryObject
    {
        $object = new ShopifyCheckoutBrandingMerchandiseThumbnailQueryObject("merchandiseThumbnail");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The order summary customizations.
     */
    public function selectOrderSummary(?ShopifyCheckoutBrandingCustomizationsOrderSummaryArgumentsObject $argsObject = null): ShopifyCheckoutBrandingOrderSummaryQueryObject
    {
        $object = new ShopifyCheckoutBrandingOrderSummaryQueryObject("orderSummary");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The primary buttons customizations.
     */
    public function selectPrimaryButton(?ShopifyCheckoutBrandingCustomizationsPrimaryButtonArgumentsObject $argsObject = null): ShopifyCheckoutBrandingButtonQueryObject
    {
        $object = new ShopifyCheckoutBrandingButtonQueryObject("primaryButton");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The secondary buttons customizations.
     */
    public function selectSecondaryButton(?ShopifyCheckoutBrandingCustomizationsSecondaryButtonArgumentsObject $argsObject = null): ShopifyCheckoutBrandingButtonQueryObject
    {
        $object = new ShopifyCheckoutBrandingButtonQueryObject("secondaryButton");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The selects customizations.
     */
    public function selectSelect(?ShopifyCheckoutBrandingCustomizationsSelectArgumentsObject $argsObject = null): ShopifyCheckoutBrandingSelectQueryObject
    {
        $object = new ShopifyCheckoutBrandingSelectQueryObject("select");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The text fields customizations.
     */
    public function selectTextField(?ShopifyCheckoutBrandingCustomizationsTextFieldArgumentsObject $argsObject = null): ShopifyCheckoutBrandingTextFieldQueryObject
    {
        $object = new ShopifyCheckoutBrandingTextFieldQueryObject("textField");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
