<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for adding and removing
 * [products](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) and
 * [product variants](https://shopify.dev/docs/api/admin-graphql/latest/objects/productvariant)
 * as prerequisites or as eligible items for a discount.
 */
class ShopifyDiscountProductsInputInputObject extends InputObject
{
    protected $productsToAdd;
    protected $productsToRemove;
    protected $productVariantsToAdd;
    protected $productVariantsToRemove;

    /**
     * The IDs of the products to add as prerequisites or as eligible items for a discount.
     */
    public function setProductsToAdd(array $productsToAdd): static
    {
        $this->productsToAdd = $productsToAdd;

        return $this;
    }

    /**
     * The IDs of the products to remove as prerequisites or as eligible items for a discount.
     */
    public function setProductsToRemove(array $productsToRemove): static
    {
        $this->productsToRemove = $productsToRemove;

        return $this;
    }

    /**
     * The IDs of the product variants to add as prerequisites or as eligible items for a discount.
     */
    public function setProductVariantsToAdd(array $productVariantsToAdd): static
    {
        $this->productVariantsToAdd = $productVariantsToAdd;

        return $this;
    }

    /**
     * The IDs of the product variants to remove as prerequisites or as eligible items for a discount.
     */
    public function setProductVariantsToRemove(array $productVariantsToRemove): static
    {
        $this->productVariantsToRemove = $productVariantsToRemove;

        return $this;
    }
}
