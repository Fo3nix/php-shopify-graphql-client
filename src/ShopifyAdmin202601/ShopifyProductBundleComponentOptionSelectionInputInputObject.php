<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a single option related to a component product.
 */
class ShopifyProductBundleComponentOptionSelectionInputInputObject extends InputObject
{
    const REQUIRED = ["componentOptionId", "name", "values"];

    protected $componentOptionId;
    protected $name;
    protected $values;

    /**
     * The ID of the option present on the component product.
     */
    public function setComponentOptionId($componentOptionId): static
    {
        $this->componentOptionId = $componentOptionId;

        return $this;
    }

    /**
     * The name to create for this option on the parent product.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Array of selected option values.
     */
    public function setValues(array $values): static
    {
        $this->values = $values;

        return $this;
    }
}
