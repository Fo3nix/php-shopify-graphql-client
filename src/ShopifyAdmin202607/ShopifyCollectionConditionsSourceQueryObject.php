<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A collection source that uses conditions and selections to determine which products are included.
 */
class ShopifyCollectionConditionsSourceQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionConditionsSource";

    /**
     * The app that created this source, if applicable. In the case of shareable sources, this app manages this source's conditions and selections exclusively.
     */
    public function selectApp(?ShopifyCollectionConditionsSourceAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * An optional description of the source.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * The rules and selections for excluding products from the collection.
     */
    public function selectExclusion(?ShopifyCollectionConditionsSourceExclusionArgumentsObject $argsObject = null): ShopifyCollectionSourceExclusionQueryObject
    {
        $object = new ShopifyCollectionSourceExclusionQueryObject("exclusion");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The unique identifier for this source.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The rules and selections for including products in the collection.
     */
    public function selectInclusion(?ShopifyCollectionConditionsSourceInclusionArgumentsObject $argsObject = null): ShopifyCollectionSourceInclusionQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionQueryObject("inclusion");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The products that are members of this source: products matched by the source's inclusion
     * conditions and manual selections, with the source's exclusion conditions, excluded
     * collections, and manual exclusions removed.
     */
    public function selectProducts(?ShopifyCollectionConditionsSourceProductsArgumentsObject $argsObject = null): ShopifyProductConnectionQueryObject
    {
        $object = new ShopifyProductConnectionQueryObject("products");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether this source can be shared across multiple collections.
     */
    public function selectShareable(): static
    {
        $this->selectField("shareable");

        return $this;
    }

    /**
     * Whether conditions match products or individual variants.
     */
    public function selectTargetType(): static
    {
        $this->selectField("targetType");

        return $this;
    }

    /**
     * The title of the source.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }
}
