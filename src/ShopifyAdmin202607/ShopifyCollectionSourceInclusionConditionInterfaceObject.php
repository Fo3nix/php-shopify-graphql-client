<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A condition that determines which products should be included in a collection.
 *
 * This is an interface implemented by a concrete type per condition kind (for example,
 * `CollectionSourceInclusionConditionProductTag` or `CollectionSourceInclusionConditionVariantTitle`).
 * Fields such as `relation` are defined on each concrete type and return a type-specific enum (for example,
 * `CollectionSourceInclusionConditionProductTagRelation` versus
 * `CollectionSourceInclusionConditionVariantTitleRelation`). Conditions are mutually exclusive concrete
 * types, but may contain overlapping field names such as `relation`. If your GraphQL tooling flags these
 * as ambiguous, give each field a distinct alias (for example, `tagRelation: relation` and
 * `variantTitleRelation: relation`) or use inline fragments.
 */
class ShopifyCollectionSourceInclusionConditionInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "CollectionSourceInclusionCondition";

    /**
     * The unique identifier for this condition.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    public function onCollectionSourceInclusionConditionMetafieldBoolean(): ShopifyCollectionSourceInclusionConditionMetafieldBooleanQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionMetafieldBooleanQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionMetafieldDecimal(): ShopifyCollectionSourceInclusionConditionMetafieldDecimalQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionMetafieldDecimalQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionMetafieldInteger(): ShopifyCollectionSourceInclusionConditionMetafieldIntegerQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionMetafieldIntegerQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionMetafieldMetaobject(): ShopifyCollectionSourceInclusionConditionMetafieldMetaobjectQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionMetafieldMetaobjectQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionMetafieldMetaobjectList(): ShopifyCollectionSourceInclusionConditionMetafieldMetaobjectListQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionMetafieldMetaobjectListQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionMetafieldString(): ShopifyCollectionSourceInclusionConditionMetafieldStringQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionMetafieldStringQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionMetafieldStringList(): ShopifyCollectionSourceInclusionConditionMetafieldStringListQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionMetafieldStringListQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionProductCategory(): ShopifyCollectionSourceInclusionConditionProductCategoryQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionProductCategoryQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionProductStatus(): ShopifyCollectionSourceInclusionConditionProductStatusQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionProductStatusQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionProductTag(): ShopifyCollectionSourceInclusionConditionProductTagQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionProductTagQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionProductTitle(): ShopifyCollectionSourceInclusionConditionProductTitleQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionProductTitleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionProductType(): ShopifyCollectionSourceInclusionConditionProductTypeQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionProductTypeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionProductVendor(): ShopifyCollectionSourceInclusionConditionProductVendorQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionProductVendorQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionUnknown(): ShopifyCollectionSourceInclusionConditionUnknownQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionUnknownQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionVariantCompareAtPrice(): ShopifyCollectionSourceInclusionConditionVariantCompareAtPriceQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionVariantCompareAtPriceQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionVariantInventory(): ShopifyCollectionSourceInclusionConditionVariantInventoryQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionVariantInventoryQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionVariantPrice(): ShopifyCollectionSourceInclusionConditionVariantPriceQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionVariantPriceQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionVariantTitle(): ShopifyCollectionSourceInclusionConditionVariantTitleQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionVariantTitleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSourceInclusionConditionVariantWeight(): ShopifyCollectionSourceInclusionConditionVariantWeightQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionVariantWeightQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
