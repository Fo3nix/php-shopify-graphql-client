<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutAndAccountsConfigurationBrandingComponentsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingComponents";

    public function selectCheckbox(ShopifyCheckoutAndAccountsConfigurationBrandingComponentsCheckboxArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingCheckboxQueryObject("checkbox");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectChoiceList(ShopifyCheckoutAndAccountsConfigurationBrandingComponentsChoiceListArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingChoiceListQueryObject("choiceList");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectControl(ShopifyCheckoutAndAccountsConfigurationBrandingComponentsControlArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingControlQueryObject("control");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDivider(ShopifyCheckoutAndAccountsConfigurationBrandingComponentsDividerArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingDividerStyleQueryObject("divider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFavicon(ShopifyCheckoutAndAccountsConfigurationBrandingComponentsFaviconArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingImageValueUnionObject("favicon");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFooter(ShopifyCheckoutAndAccountsConfigurationBrandingComponentsFooterArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingFooterQueryObject("footer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectHeader(ShopifyCheckoutAndAccountsConfigurationBrandingComponentsHeaderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingHeaderQueryObject("header");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectHeadingLevel1(ShopifyCheckoutAndAccountsConfigurationBrandingComponentsHeadingLevel1ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevelQueryObject("headingLevel1");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectHeadingLevel2(ShopifyCheckoutAndAccountsConfigurationBrandingComponentsHeadingLevel2ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevelQueryObject("headingLevel2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectHeadingLevel3(ShopifyCheckoutAndAccountsConfigurationBrandingComponentsHeadingLevel3ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevelQueryObject("headingLevel3");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMain(ShopifyCheckoutAndAccountsConfigurationBrandingComponentsMainArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingMainQueryObject("main");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMerchandiseThumbnail(ShopifyCheckoutAndAccountsConfigurationBrandingComponentsMerchandiseThumbnailArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailQueryObject("merchandiseThumbnail");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPrimaryButton(ShopifyCheckoutAndAccountsConfigurationBrandingComponentsPrimaryButtonArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingButtonQueryObject("primaryButton");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSecondaryButton(ShopifyCheckoutAndAccountsConfigurationBrandingComponentsSecondaryButtonArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingButtonQueryObject("secondaryButton");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSelect(ShopifyCheckoutAndAccountsConfigurationBrandingComponentsSelectArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingSelectQueryObject("select");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShared(ShopifyCheckoutAndAccountsConfigurationBrandingComponentsSharedArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingSharedQueryObject("shared");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTextField(ShopifyCheckoutAndAccountsConfigurationBrandingComponentsTextFieldArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingTextFieldQueryObject("textField");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
