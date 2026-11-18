<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The color settings used to customize the user interface.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingColors";

    /**
     * The main colors, used for the surface background, text, links, and more.
     */
    public function selectBase(?ShopifyCheckoutAndAccountsConfigurationBrandingColorsBaseArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingBaseColorRolesQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingBaseColorRolesQueryObject("base");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The colors of form controls, such as the [`TextField`](https://shopify.dev/docs/api/checkout-ui-extensions/latest/components/forms/textfield) and [`ChoiceList`](https://shopify.dev/docs/api/checkout-ui-extensions/latest/components/forms/choicelist) components.
     */
    public function selectControl(?ShopifyCheckoutAndAccountsConfigurationBrandingColorsControlArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingControlColorRolesQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingControlColorRolesQueryObject("control");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The colors of the primary button. For example, the main payment, or **Pay now** button.
     */
    public function selectPrimaryButton(?ShopifyCheckoutAndAccountsConfigurationBrandingColorsPrimaryButtonArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingPrimaryButtonColorRolesQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingPrimaryButtonColorRolesQueryObject("primaryButton");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The colors of the secondary button, which is used for secondary actions. For example, **Buy again**.
     */
    public function selectSecondaryButton(?ShopifyCheckoutAndAccountsConfigurationBrandingColorsSecondaryButtonArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingSecondaryButtonColorRolesQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingSecondaryButtonColorRolesQueryObject("secondaryButton");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
