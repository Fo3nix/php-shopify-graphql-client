<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The sign-in-specific main customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSignInMainQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingSignInMain";

    /**
     * The background image of the main container.
     */
    public function selectBackgroundImage(?ShopifyCheckoutAndAccountsConfigurationBrandingSignInMainBackgroundImageArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingImageValueUnionObject
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
    public function selectColors(?ShopifyCheckoutAndAccountsConfigurationBrandingSignInMainColorsArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject("colors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The main sections.
     */
    public function selectSection(?ShopifyCheckoutAndAccountsConfigurationBrandingSignInMainSectionArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingMainSectionQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingMainSectionQueryObject("section");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
