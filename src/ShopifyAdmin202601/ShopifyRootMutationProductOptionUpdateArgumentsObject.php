<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationProductOptionUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["option", "productId"];

    protected $option;
    protected $productId;
    protected $optionValuesToAdd;
    protected $optionValuesToUpdate;
    protected $optionValuesToDelete;
    protected $variantStrategy;

    /**
     * Option to update.
     */
    public function setOption(ShopifyOptionUpdateInputInputObject $shopifyOptionUpdateInputInputObject): static
    {
        $this->option = $shopifyOptionUpdateInputInputObject;

        return $this;
    }

    /**
     * The ID of the Product the Option belongs to.
     */
    public function setProductId($productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * New option values to create. Values are added after the option's existing values, in the order that you
     * provide them. To change the order of values, use
     * [`productOptionsReorder`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productOptionsReorder).
     */
    public function setOptionValuesToAdd(array $optionValuesToAdd): static
    {
        $this->optionValuesToAdd = $optionValuesToAdd;

        return $this;
    }

    /**
     * Existing option values to update.
     */
    public function setOptionValuesToUpdate(array $optionValuesToUpdate): static
    {
        $this->optionValuesToUpdate = $optionValuesToUpdate;

        return $this;
    }

    /**
     * IDs of the existing option values to delete.
     */
    public function setOptionValuesToDelete(array $optionValuesToDelete): static
    {
        $this->optionValuesToDelete = $optionValuesToDelete;

        return $this;
    }

    /**
     * The strategy defines which behavior the mutation should observe regarding variants,
     * such as creating variants or deleting them in response to option values to add or to delete.
     * If not provided or set to null, the strategy `LEAVE_AS_IS` will be used.
     */
    public function setVariantStrategy($shopifyProductOptionUpdateVariantStrategy): static
    {
        $this->variantStrategy = new RawObject($shopifyProductOptionUpdateVariantStrategy);

        return $this;
    }
}
