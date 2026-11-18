<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The color schemes.
 */
class ShopifyCheckoutBrandingColorSchemesQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingColorSchemes";

    /**
     * The primary scheme. By default, it’s used for the main area of the interface.
     */
    public function selectScheme1(?ShopifyCheckoutBrandingColorSchemesScheme1ArgumentsObject $argsObject = null): ShopifyCheckoutBrandingColorSchemeQueryObject
    {
        $object = new ShopifyCheckoutBrandingColorSchemeQueryObject("scheme1");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The secondary scheme. By default, it’s used for secondary areas, like Checkout’s Order Summary.
     */
    public function selectScheme2(?ShopifyCheckoutBrandingColorSchemesScheme2ArgumentsObject $argsObject = null): ShopifyCheckoutBrandingColorSchemeQueryObject
    {
        $object = new ShopifyCheckoutBrandingColorSchemeQueryObject("scheme2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * An extra scheme available to customize more surfaces, components or specific states of the user interface.
     */
    public function selectScheme3(?ShopifyCheckoutBrandingColorSchemesScheme3ArgumentsObject $argsObject = null): ShopifyCheckoutBrandingColorSchemeQueryObject
    {
        $object = new ShopifyCheckoutBrandingColorSchemeQueryObject("scheme3");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * An extra scheme available to customize more surfaces, components or specific states of the user interface.
     */
    public function selectScheme4(?ShopifyCheckoutBrandingColorSchemesScheme4ArgumentsObject $argsObject = null): ShopifyCheckoutBrandingColorSchemeQueryObject
    {
        $object = new ShopifyCheckoutBrandingColorSchemeQueryObject("scheme4");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * An extra scheme available to customize more surfaces, components or specific states of the user interface.
     */
    public function selectScheme5(?ShopifyCheckoutBrandingColorSchemesScheme5ArgumentsObject $argsObject = null): ShopifyCheckoutBrandingColorSchemeQueryObject
    {
        $object = new ShopifyCheckoutBrandingColorSchemeQueryObject("scheme5");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * An extra scheme available to customize more surfaces, components or specific states of the user interface.
     */
    public function selectScheme6(?ShopifyCheckoutBrandingColorSchemesScheme6ArgumentsObject $argsObject = null): ShopifyCheckoutBrandingColorSchemeQueryObject
    {
        $object = new ShopifyCheckoutBrandingColorSchemeQueryObject("scheme6");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
