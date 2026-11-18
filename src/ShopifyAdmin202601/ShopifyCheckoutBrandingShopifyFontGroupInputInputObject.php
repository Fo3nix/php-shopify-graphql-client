<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to update a Shopify font group.
 */
class ShopifyCheckoutBrandingShopifyFontGroupInputInputObject extends InputObject
{
    const REQUIRED = ["name"];

    protected $name;
    protected $baseWeight;
    protected $boldWeight;
    protected $loadingStrategy;

    /**
     * The Shopify font name from [the list of available fonts](https://shopify.dev/themes/architecture/settings/fonts#available-fonts), such as `Alegreya Sans` or `Anonymous Pro`.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The base font weight.
     */
    public function setBaseWeight($baseWeight): static
    {
        $this->baseWeight = $baseWeight;

        return $this;
    }

    /**
     * The bold font weight.
     */
    public function setBoldWeight($boldWeight): static
    {
        $this->boldWeight = $boldWeight;

        return $this;
    }

    /**
     * The font loading strategy.
     */
    public function setLoadingStrategy($shopifyCheckoutBrandingFontLoadingStrategy): static
    {
        $this->loadingStrategy = new RawObject($shopifyCheckoutBrandingFontLoadingStrategy);

        return $this;
    }
}
