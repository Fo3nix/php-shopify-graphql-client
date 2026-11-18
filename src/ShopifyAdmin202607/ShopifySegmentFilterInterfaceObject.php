<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * The filters used in segment queries associated with a shop.
 */
class ShopifySegmentFilterInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "SegmentFilter";

    /**
     * The localized name of the filter.
     */
    public function selectLocalizedName(): static
    {
        $this->selectField("localizedName");

        return $this;
    }

    /**
     * Whether a file can have multiple values for a single customer.
     */
    public function selectMultiValue(): static
    {
        $this->selectField("multiValue");

        return $this;
    }

    /**
     * The query name of the filter.
     */
    public function selectQueryName(): static
    {
        $this->selectField("queryName");

        return $this;
    }

    public function onSegmentAssociationFilter(): ShopifySegmentAssociationFilterQueryObject
    {
        $object = new ShopifySegmentAssociationFilterQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSegmentBooleanFilter(): ShopifySegmentBooleanFilterQueryObject
    {
        $object = new ShopifySegmentBooleanFilterQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSegmentDateFilter(): ShopifySegmentDateFilterQueryObject
    {
        $object = new ShopifySegmentDateFilterQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSegmentEnumFilter(): ShopifySegmentEnumFilterQueryObject
    {
        $object = new ShopifySegmentEnumFilterQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSegmentEventFilter(): ShopifySegmentEventFilterQueryObject
    {
        $object = new ShopifySegmentEventFilterQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSegmentFloatFilter(): ShopifySegmentFloatFilterQueryObject
    {
        $object = new ShopifySegmentFloatFilterQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSegmentIntegerFilter(): ShopifySegmentIntegerFilterQueryObject
    {
        $object = new ShopifySegmentIntegerFilterQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSegmentStringFilter(): ShopifySegmentStringFilterQueryObject
    {
        $object = new ShopifySegmentStringFilterQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
