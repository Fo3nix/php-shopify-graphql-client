<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\UnionObject;

/**
 * The type used to target the items required for discount eligibility, or the items to which the application of a discount might apply. For example, for a customer to be eligible for a discount, they're required to add an item from a specified collection to their order. Alternatively, a customer might be required to add a specific product or product variant. When using this type to target which items the discount will apply to, the discount might apply to all items on the order, or to specific products and product variants, or items in a given collection.
 */
class ShopifyDiscountItemsUnionObject extends UnionObject
{
    public function onShopifyAllDiscountItems(): ShopifyAllDiscountItemsQueryObject
    {
        $object = new ShopifyAllDiscountItemsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountCollections(): ShopifyDiscountCollectionsQueryObject
    {
        $object = new ShopifyDiscountCollectionsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountProducts(): ShopifyDiscountProductsQueryObject
    {
        $object = new ShopifyDiscountProductsQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
