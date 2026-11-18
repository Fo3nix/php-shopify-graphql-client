<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a single component related to a componentized product.
 */
class ShopifyProductBundleComponentInputInputObject extends InputObject
{
    const REQUIRED = ["productId", "optionSelections"];

    protected $quantity;
    protected $productId;
    protected $optionSelections;
    protected $quantityOption;

    /**
     * The quantity of the component product to add to the bundle product. This field can't exceed 2000.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * The ID of the component product to add to the bundle product.
     */
    public function setProductId($productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * The options to use in the component product, and the values for the option.
     */
    public function setOptionSelections(array $optionSelections): static
    {
        $this->optionSelections = $optionSelections;

        return $this;
    }

    /**
     * New option to be created on the bundle parent that enables the buyer to select different quantities for
     * this component (e.g. two-pack, three-pack). Can only be used if quantity isn't set.
     */
    public function setQuantityOption(ShopifyProductBundleComponentQuantityOptionInputInputObject $shopifyProductBundleComponentQuantityOptionInputInputObject): static
    {
        $this->quantityOption = $shopifyProductBundleComponentQuantityOptionInputInputObject;

        return $this;
    }
}
