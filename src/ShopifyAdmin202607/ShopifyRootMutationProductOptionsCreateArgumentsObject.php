<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationProductOptionsCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["productId", "options"];

    protected $productId;
    protected $options;
    protected $variantStrategy;

    /**
     * The ID of the product to update.
     */
    public function setProductId($productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Options to add to the product.
     */
    public function setOptions(array $options): static
    {
        $this->options = $options;

        return $this;
    }

    /**
     * The strategy defines which behavior the mutation should observe regarding variants.
     * If not provided or set to null, the strategy `LEAVE_AS_IS` will be used.
     */
    public function setVariantStrategy($shopifyProductOptionCreateVariantStrategy): static
    {
        $this->variantStrategy = new RawObject($shopifyProductOptionCreateVariantStrategy);

        return $this;
    }
}
