<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A font.
 */
class ShopifyCheckoutBrandingFontInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "CheckoutBrandingFont";

    /**
     * The font sources.
     */
    public function selectSources(): static
    {
        $this->selectField("sources");

        return $this;
    }

    /**
     * The font weight.
     */
    public function selectWeight(): static
    {
        $this->selectField("weight");

        return $this;
    }

    public function onCheckoutBrandingCustomFont(): ShopifyCheckoutBrandingCustomFontQueryObject
    {
        $object = new ShopifyCheckoutBrandingCustomFontQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCheckoutBrandingShopifyFont(): ShopifyCheckoutBrandingShopifyFontQueryObject
    {
        $object = new ShopifyCheckoutBrandingShopifyFontQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
