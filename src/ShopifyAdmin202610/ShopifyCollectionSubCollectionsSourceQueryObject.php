<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A collection source whose membership comes from one or more referenced collections (sub-collections).
 *
 * Sub-collection sources are always non-shareable. Sharing a sub-collection source across owners is not
 * supported because the collection references are owner-bound.
 */
class ShopifyCollectionSubCollectionsSourceQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSubCollectionsSource";

    /**
     * The app that created this source, if applicable. In the case of shareable sources, this app manages this source's conditions and selections exclusively.
     */
    public function selectApp(?ShopifyCollectionSubCollectionsSourceAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The referenced sub-collections that supply products to this source.
     */
    public function selectCollections(?ShopifyCollectionSubCollectionsSourceCollectionsArgumentsObject $argsObject = null): ShopifyCollectionQueryObject
    {
        $object = new ShopifyCollectionQueryObject("collections");
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
     * The unique identifier for this source.
     */
    public function selectId(): static
    {
        $this->selectField("id");

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
