<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for adding products to the Combined Listing.
 */
class ShopifyChildProductRelationInputInputObject extends InputObject
{
    const REQUIRED = ["childProductId", "selectedParentOptionValues"];

    protected $childProductId;
    protected $selectedParentOptionValues;

    /**
     * The ID of the child product.
     */
    public function setChildProductId($childProductId): static
    {
        $this->childProductId = $childProductId;

        return $this;
    }

    /**
     * The parent option values.
     */
    public function setSelectedParentOptionValues(array $selectedParentOptionValues): static
    {
        $this->selectedParentOptionValues = $selectedParentOptionValues;

        return $this;
    }
}
