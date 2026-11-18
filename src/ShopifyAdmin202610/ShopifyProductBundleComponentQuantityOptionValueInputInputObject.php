<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a single quantity option value related to a component product.
 */
class ShopifyProductBundleComponentQuantityOptionValueInputInputObject extends InputObject
{
    const REQUIRED = ["name", "quantity"];

    protected $name;
    protected $quantity;

    /**
     * The name associated with the option, e.g. one-pack, two-pack.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * How many of the variant will be included for the option value (e.g. two-pack has quantity 2).
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }
}
