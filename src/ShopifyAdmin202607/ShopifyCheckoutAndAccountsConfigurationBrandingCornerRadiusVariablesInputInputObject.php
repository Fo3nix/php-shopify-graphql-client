<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing the corner radius variables.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCornerRadiusVariablesInputInputObject extends InputObject
{
    protected $small;
    protected $base;
    protected $large;

    /**
     * The value in pixels for small corner radii. It should be greater than zero. Example: 3.
     */
    public function setSmall($small): static
    {
        $this->small = $small;

        return $this;
    }

    /**
     * The value in pixels for base corner radii. It should be greater than zero. Example: 5.
     */
    public function setBase($base): static
    {
        $this->base = $base;

        return $this;
    }

    /**
     * The value in pixels for large corner radii. It should be greater than zero. Example: 10.
     */
    public function setLarge($large): static
    {
        $this->large = $large;

        return $this;
    }
}
