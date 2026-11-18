<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for mapping a consolidated option to a specific component option.
 */
class ShopifyProductBundleConsolidatedOptionComponentInputInputObject extends InputObject
{
    const REQUIRED = ["componentOptionValue"];

    protected $componentOptionValue;
    protected $componentOptionId;

    /**
     * The value to use for the component option (e.g., 'Small', 'Red').
     */
    public function setComponentOptionValue($componentOptionValue): static
    {
        $this->componentOptionValue = $componentOptionValue;

        return $this;
    }

    /**
     * The ID of the component option that this consolidated option maps to.
     * If null, this selection targets the component's quantity option with the given name.
     */
    public function setComponentOptionId($componentOptionId): static
    {
        $this->componentOptionId = $componentOptionId;

        return $this;
    }
}
