<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingCustomizationsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingCustomizations";

    public function selectBuyerJourney(ShopifyCheckoutBrandingCustomizationsBuyerJourneyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingBuyerJourneyQueryObject("buyerJourney");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCartLink(ShopifyCheckoutBrandingCustomizationsCartLinkArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingCartLinkQueryObject("cartLink");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCheckbox(ShopifyCheckoutBrandingCustomizationsCheckboxArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingCheckboxQueryObject("checkbox");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectChoiceList(ShopifyCheckoutBrandingCustomizationsChoiceListArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingChoiceListQueryObject("choiceList");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectContent(ShopifyCheckoutBrandingCustomizationsContentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingContentQueryObject("content");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectControl(ShopifyCheckoutBrandingCustomizationsControlArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingControlQueryObject("control");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDivider(ShopifyCheckoutBrandingCustomizationsDividerArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingDividerStyleQueryObject("divider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectExpressCheckout(ShopifyCheckoutBrandingCustomizationsExpressCheckoutArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingExpressCheckoutQueryObject("expressCheckout");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFavicon(ShopifyCheckoutBrandingCustomizationsFaviconArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingImageQueryObject("favicon");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFooter(ShopifyCheckoutBrandingCustomizationsFooterArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingFooterQueryObject("footer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectGlobal(ShopifyCheckoutBrandingCustomizationsGlobalArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingGlobalQueryObject("global");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectHeader(ShopifyCheckoutBrandingCustomizationsHeaderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingHeaderQueryObject("header");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectHeadingLevel1(ShopifyCheckoutBrandingCustomizationsHeadingLevel1ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingHeadingLevelQueryObject("headingLevel1");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectHeadingLevel2(ShopifyCheckoutBrandingCustomizationsHeadingLevel2ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingHeadingLevelQueryObject("headingLevel2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectHeadingLevel3(ShopifyCheckoutBrandingCustomizationsHeadingLevel3ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingHeadingLevelQueryObject("headingLevel3");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMain(ShopifyCheckoutBrandingCustomizationsMainArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingMainQueryObject("main");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMerchandiseThumbnail(ShopifyCheckoutBrandingCustomizationsMerchandiseThumbnailArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingMerchandiseThumbnailQueryObject("merchandiseThumbnail");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrderSummary(ShopifyCheckoutBrandingCustomizationsOrderSummaryArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingOrderSummaryQueryObject("orderSummary");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPrimaryButton(ShopifyCheckoutBrandingCustomizationsPrimaryButtonArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingButtonQueryObject("primaryButton");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSecondaryButton(ShopifyCheckoutBrandingCustomizationsSecondaryButtonArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingButtonQueryObject("secondaryButton");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSelect(ShopifyCheckoutBrandingCustomizationsSelectArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingSelectQueryObject("select");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTextField(ShopifyCheckoutBrandingCustomizationsTextFieldArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingTextFieldQueryObject("textField");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
