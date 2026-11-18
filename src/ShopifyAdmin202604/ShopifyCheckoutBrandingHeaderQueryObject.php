<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The header customizations.
 */
class ShopifyCheckoutBrandingHeaderQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingHeader";

    /**
     * The header alignment.
     */
    public function selectAlignment(): static
    {
        $this->selectField("alignment");

        return $this;
    }

    /**
     * The background image of the header.
     */
    public function selectBanner(?ShopifyCheckoutBrandingHeaderBannerArgumentsObject $argsObject = null): ShopifyCheckoutBrandingImageQueryObject
    {
        $object = new ShopifyCheckoutBrandingImageQueryObject("banner");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The cart link customizations for 1-page checkout. This field allows to customize the cart icon that renders by default on 1-page checkout.
     */
    public function selectCartLink(?ShopifyCheckoutBrandingHeaderCartLinkArgumentsObject $argsObject = null): ShopifyCheckoutBrandingHeaderCartLinkQueryObject
    {
        $object = new ShopifyCheckoutBrandingHeaderCartLinkQueryObject("cartLink");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The selected color scheme of the header container.
     */
    public function selectColorScheme(): static
    {
        $this->selectField("colorScheme");

        return $this;
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
     * The store logo.
     */
    public function selectLogo(?ShopifyCheckoutBrandingHeaderLogoArgumentsObject $argsObject = null): ShopifyCheckoutBrandingLogoQueryObject
    {
        $object = new ShopifyCheckoutBrandingLogoQueryObject("logo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The padding of the header container.
     */
    public function selectPadding(): static
    {
        $this->selectField("padding");

        return $this;
    }

    /**
     * The header position.
     */
    public function selectPosition(): static
    {
        $this->selectField("position");

        return $this;
    }
}
