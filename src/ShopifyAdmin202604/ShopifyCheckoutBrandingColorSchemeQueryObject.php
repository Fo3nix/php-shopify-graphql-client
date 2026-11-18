<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A base set of color customizations that's applied to an area of Checkout, from which every component
 * pulls its colors.
 */
class ShopifyCheckoutBrandingColorSchemeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingColorScheme";

    /**
     * The main colors of a scheme. Used for the surface background, text, links, and more.
     */
    public function selectBase(?ShopifyCheckoutBrandingColorSchemeBaseArgumentsObject $argsObject = null): ShopifyCheckoutBrandingColorRolesQueryObject
    {
        $object = new ShopifyCheckoutBrandingColorRolesQueryObject("base");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The colors of form controls, such as the [`TextField`](https://shopify.dev/docs/api/checkout-ui-extensions/latest/components/forms/textfield) and [`ChoiceList`](https://shopify.dev/docs/api/checkout-ui-extensions/latest/components/forms/choicelist) components.
     */
    public function selectControl(?ShopifyCheckoutBrandingColorSchemeControlArgumentsObject $argsObject = null): ShopifyCheckoutBrandingControlColorRolesQueryObject
    {
        $object = new ShopifyCheckoutBrandingControlColorRolesQueryObject("control");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The colors of the primary button. For example, the main payment, or **Pay now** button.
     */
    public function selectPrimaryButton(?ShopifyCheckoutBrandingColorSchemePrimaryButtonArgumentsObject $argsObject = null): ShopifyCheckoutBrandingButtonColorRolesQueryObject
    {
        $object = new ShopifyCheckoutBrandingButtonColorRolesQueryObject("primaryButton");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The colors of the secondary button, which is used for secondary actions. For example, **Buy again**.
     */
    public function selectSecondaryButton(?ShopifyCheckoutBrandingColorSchemeSecondaryButtonArgumentsObject $argsObject = null): ShopifyCheckoutBrandingButtonColorRolesQueryObject
    {
        $object = new ShopifyCheckoutBrandingButtonColorRolesQueryObject("secondaryButton");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
