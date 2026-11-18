<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A container for the footer section customizations.
 */
class ShopifyCheckoutBrandingFooterQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingFooter";

    /**
     * The footer alignment.
     */
    public function selectAlignment(): static
    {
        $this->selectField("alignment");

        return $this;
    }

    /**
     * The selected color scheme of the footer container.
     */
    public function selectColorScheme(): static
    {
        $this->selectField("colorScheme");

        return $this;
    }

    /**
     * The footer content settings.
     */
    public function selectContent(?ShopifyCheckoutBrandingFooterContentArgumentsObject $argsObject = null): ShopifyCheckoutBrandingFooterContentQueryObject
    {
        $object = new ShopifyCheckoutBrandingFooterContentQueryObject("content");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The divided setting.
     */
    public function selectDivided(): static
    {
        $this->selectField("divided");

        return $this;
    }

    /**
     * The padding of the footer container.
     */
    public function selectPadding(): static
    {
        $this->selectField("padding");

        return $this;
    }

    /**
     * The footer position.
     */
    public function selectPosition(): static
    {
        $this->selectField("position");

        return $this;
    }
}
