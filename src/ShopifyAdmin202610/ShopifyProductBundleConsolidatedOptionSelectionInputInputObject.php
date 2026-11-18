<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a consolidated option selection that maps to component options.
 */
class ShopifyProductBundleConsolidatedOptionSelectionInputInputObject extends InputObject
{
    const REQUIRED = ["optionValue", "components"];

    protected $optionValue;
    protected $components;

    /**
     * The value for this consolidated option selection (e.g., 'Small', 'Medium', 'Large').
     */
    public function setOptionValue($optionValue): static
    {
        $this->optionValue = $optionValue;

        return $this;
    }

    /**
     * The component mappings that define how this option value maps to specific component options.
     */
    public function setComponents(array $components): static
    {
        $this->components = $components;

        return $this;
    }
}
