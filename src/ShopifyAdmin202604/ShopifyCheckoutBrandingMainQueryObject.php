<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The main container customizations.
 */
class ShopifyCheckoutBrandingMainQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingMain";

    /**
     * The background image of the main container.
     */
    public function selectBackgroundImage(?ShopifyCheckoutBrandingMainBackgroundImageArgumentsObject $argsObject = null): ShopifyCheckoutBrandingImageQueryObject
    {
        $object = new ShopifyCheckoutBrandingImageQueryObject("backgroundImage");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The selected color scheme of the main container.
     */
    public function selectColorScheme(): static
    {
        $this->selectField("colorScheme");

        return $this;
    }

    /**
     * The main container's divider style and visibility.
     */
    public function selectDivider(?ShopifyCheckoutBrandingMainDividerArgumentsObject $argsObject = null): ShopifyCheckoutBrandingContainerDividerQueryObject
    {
        $object = new ShopifyCheckoutBrandingContainerDividerQueryObject("divider");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The settings for the main sections.
     */
    public function selectSection(?ShopifyCheckoutBrandingMainSectionArgumentsObject $argsObject = null): ShopifyCheckoutBrandingMainSectionQueryObject
    {
        $object = new ShopifyCheckoutBrandingMainSectionQueryObject("section");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
