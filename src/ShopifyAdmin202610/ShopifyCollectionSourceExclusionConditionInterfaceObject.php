<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A condition that determines which products should be excluded from a collection.
 */
class ShopifyCollectionSourceExclusionConditionInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "CollectionSourceExclusionCondition";

    /**
     * The unique identifier for this exclusion condition.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    public function onCollectionSourceExclusionConditionCollection(): ShopifyCollectionSourceExclusionConditionCollectionQueryObject
    {
        $object = new ShopifyCollectionSourceExclusionConditionCollectionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceExclusionConditionProductCategory(): ShopifyCollectionSourceExclusionConditionProductCategoryQueryObject
    {
        $object = new ShopifyCollectionSourceExclusionConditionProductCategoryQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceExclusionConditionProductTag(): ShopifyCollectionSourceExclusionConditionProductTagQueryObject
    {
        $object = new ShopifyCollectionSourceExclusionConditionProductTagQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceExclusionConditionProductType(): ShopifyCollectionSourceExclusionConditionProductTypeQueryObject
    {
        $object = new ShopifyCollectionSourceExclusionConditionProductTypeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceExclusionConditionProductVendor(): ShopifyCollectionSourceExclusionConditionProductVendorQueryObject
    {
        $object = new ShopifyCollectionSourceExclusionConditionProductVendorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceExclusionConditionUnknown(): ShopifyCollectionSourceExclusionConditionUnknownQueryObject
    {
        $object = new ShopifyCollectionSourceExclusionConditionUnknownQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
