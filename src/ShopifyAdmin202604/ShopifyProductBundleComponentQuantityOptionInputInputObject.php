<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * Input for the quantity option related to a component product. This will become a new option on the parent bundle product that doesn't have a corresponding option on the component.
 */
class ShopifyProductBundleComponentQuantityOptionInputInputObject extends InputObject
{
    const REQUIRED = ["name", "values"];

    protected $name;
    protected $values;

    /**
     * The option name to create on the parent product.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Array of option values.
     */
    public function setValues(array $values): static
    {
        $this->values = $values;

        return $this;
    }
}
