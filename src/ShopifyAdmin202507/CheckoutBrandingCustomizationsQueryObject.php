<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingCustomizationsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingCustomizations";

    public function selectBuyerJourney(CheckoutBrandingCustomizationsBuyerJourneyArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingBuyerJourneyQueryObject("buyerJourney");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCartLink(CheckoutBrandingCustomizationsCartLinkArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingCartLinkQueryObject("cartLink");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCheckbox(CheckoutBrandingCustomizationsCheckboxArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingCheckboxQueryObject("checkbox");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectChoiceList(CheckoutBrandingCustomizationsChoiceListArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingChoiceListQueryObject("choiceList");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectContent(CheckoutBrandingCustomizationsContentArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingContentQueryObject("content");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectControl(CheckoutBrandingCustomizationsControlArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingControlQueryObject("control");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDivider(CheckoutBrandingCustomizationsDividerArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingDividerStyleQueryObject("divider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectExpressCheckout(CheckoutBrandingCustomizationsExpressCheckoutArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingExpressCheckoutQueryObject("expressCheckout");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFavicon(CheckoutBrandingCustomizationsFaviconArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingImageQueryObject("favicon");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFooter(CheckoutBrandingCustomizationsFooterArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingFooterQueryObject("footer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectGlobal(CheckoutBrandingCustomizationsGlobalArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingGlobalQueryObject("global");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectHeader(CheckoutBrandingCustomizationsHeaderArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingHeaderQueryObject("header");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectHeadingLevel1(CheckoutBrandingCustomizationsHeadingLevel1ArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingHeadingLevelQueryObject("headingLevel1");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectHeadingLevel2(CheckoutBrandingCustomizationsHeadingLevel2ArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingHeadingLevelQueryObject("headingLevel2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectHeadingLevel3(CheckoutBrandingCustomizationsHeadingLevel3ArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingHeadingLevelQueryObject("headingLevel3");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMain(CheckoutBrandingCustomizationsMainArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingMainQueryObject("main");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMerchandiseThumbnail(CheckoutBrandingCustomizationsMerchandiseThumbnailArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingMerchandiseThumbnailQueryObject("merchandiseThumbnail");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrderSummary(CheckoutBrandingCustomizationsOrderSummaryArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingOrderSummaryQueryObject("orderSummary");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPrimaryButton(CheckoutBrandingCustomizationsPrimaryButtonArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingButtonQueryObject("primaryButton");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSecondaryButton(CheckoutBrandingCustomizationsSecondaryButtonArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingButtonQueryObject("secondaryButton");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSelect(CheckoutBrandingCustomizationsSelectArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingSelectQueryObject("select");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTextField(CheckoutBrandingCustomizationsTextFieldArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingTextFieldQueryObject("textField");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
