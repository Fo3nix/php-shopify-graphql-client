<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The main container customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingMainQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingMain";

    /**
     * The colors customizations.
     */
    public function selectColors(?ShopifyCheckoutAndAccountsConfigurationBrandingMainColorsArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject("colors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The main container's divider style and visibility.
     */
    public function selectDivider(?ShopifyCheckoutAndAccountsConfigurationBrandingMainDividerArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingContainerDividerQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingContainerDividerQueryObject("divider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The main sections.
     */
    public function selectSection(?ShopifyCheckoutAndAccountsConfigurationBrandingMainSectionArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingMainSectionQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingMainSectionQueryObject("section");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
