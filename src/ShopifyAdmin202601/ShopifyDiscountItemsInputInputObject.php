<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the items attached to a discount. You can specify the discount items by product ID or collection ID.
 */
class ShopifyDiscountItemsInputInputObject extends InputObject
{
    protected $products;
    protected $collections;
    protected $all;

    /**
     * The
     * [products](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) and
     * [product variants](https://shopify.dev/docs/api/admin-graphql/latest/objects/productvariant)
     * that the discount applies to.
     */
    public function setProducts(ShopifyDiscountProductsInputInputObject $shopifyDiscountProductsInputInputObject): static
    {
        $this->products = $shopifyDiscountProductsInputInputObject;

        return $this;
    }

    /**
     * The collections that are attached to a discount.
     */
    public function setCollections(ShopifyDiscountCollectionsInputInputObject $shopifyDiscountCollectionsInputInputObject): static
    {
        $this->collections = $shopifyDiscountCollectionsInputInputObject;

        return $this;
    }

    /**
     * Whether all items should be selected for the discount. Not supported for Buy X get Y discounts.
     */
    public function setAll($all): static
    {
        $this->all = $all;

        return $this;
    }
}
