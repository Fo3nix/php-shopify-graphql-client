<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The base component customizations that apply to all surfaces.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingComponentsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingComponents";

    /**
     * The checkboxes.
     */
    public function selectCheckbox(?ShopifyCheckoutAndAccountsConfigurationBrandingComponentsCheckboxArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingCheckboxQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingCheckboxQueryObject("checkbox");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The choice list.
     */
    public function selectChoiceList(?ShopifyCheckoutAndAccountsConfigurationBrandingComponentsChoiceListArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingChoiceListQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingChoiceListQueryObject("choiceList");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The form controls.
     */
    public function selectControl(?ShopifyCheckoutAndAccountsConfigurationBrandingComponentsControlArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingControlQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingControlQueryObject("control");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The customizations for the page, content, main, and order summary dividers. For example, by setting the borderStyle to `DOTTED`, you can make these dividers render as dotted lines.
     */
    public function selectDivider(?ShopifyCheckoutAndAccountsConfigurationBrandingComponentsDividerArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingDividerStyleQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingDividerStyleQueryObject("divider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The favicon.
     */
    public function selectFavicon(?ShopifyCheckoutAndAccountsConfigurationBrandingComponentsFaviconArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingImageValueUnionObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingImageValueUnionObject("favicon");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The footer.
     */
    public function selectFooter(?ShopifyCheckoutAndAccountsConfigurationBrandingComponentsFooterArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingFooterQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingFooterQueryObject("footer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The header.
     */
    public function selectHeader(?ShopifyCheckoutAndAccountsConfigurationBrandingComponentsHeaderArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingHeaderQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingHeaderQueryObject("header");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The Heading Level 1.
     */
    public function selectHeadingLevel1(?ShopifyCheckoutAndAccountsConfigurationBrandingComponentsHeadingLevel1ArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevelQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevelQueryObject("headingLevel1");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The Heading Level 2.
     */
    public function selectHeadingLevel2(?ShopifyCheckoutAndAccountsConfigurationBrandingComponentsHeadingLevel2ArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevelQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevelQueryObject("headingLevel2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The Heading Level 3.
     */
    public function selectHeadingLevel3(?ShopifyCheckoutAndAccountsConfigurationBrandingComponentsHeadingLevel3ArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevelQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevelQueryObject("headingLevel3");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The main area.
     */
    public function selectMain(?ShopifyCheckoutAndAccountsConfigurationBrandingComponentsMainArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingMainQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingMainQueryObject("main");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The merchandise thumbnails.
     */
    public function selectMerchandiseThumbnail(?ShopifyCheckoutAndAccountsConfigurationBrandingComponentsMerchandiseThumbnailArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnailQueryObject("merchandiseThumbnail");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The primary buttons.
     */
    public function selectPrimaryButton(?ShopifyCheckoutAndAccountsConfigurationBrandingComponentsPrimaryButtonArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingButtonQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingButtonQueryObject("primaryButton");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The secondary buttons.
     */
    public function selectSecondaryButton(?ShopifyCheckoutAndAccountsConfigurationBrandingComponentsSecondaryButtonArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingButtonQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingButtonQueryObject("secondaryButton");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The selects.
     */
    public function selectSelect(?ShopifyCheckoutAndAccountsConfigurationBrandingComponentsSelectArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingSelectQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingSelectQueryObject("select");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The shared settings.
     */
    public function selectShared(?ShopifyCheckoutAndAccountsConfigurationBrandingComponentsSharedArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingSharedQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingSharedQueryObject("shared");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The text fields.
     */
    public function selectTextField(?ShopifyCheckoutAndAccountsConfigurationBrandingComponentsTextFieldArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingTextFieldQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingTextFieldQueryObject("textField");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
