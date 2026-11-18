<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a consolidated option on a componentized product.
 */
class ShopifyProductBundleConsolidatedOptionInputInputObject extends InputObject
{
    const REQUIRED = ["optionName", "optionSelections"];

    protected $optionName;
    protected $optionSelections;

    /**
     * The name of the consolidated option (e.g., 'Size', 'Color').
     */
    public function setOptionName($optionName): static
    {
        $this->optionName = $optionName;

        return $this;
    }

    /**
     * The option selections that define how this consolidated option maps to component options.
     */
    public function setOptionSelections(array $optionSelections): static
    {
        $this->optionSelections = $optionSelections;

        return $this;
    }
}
