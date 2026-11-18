<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A source that provides products for a collection.
 */
class ShopifyCollectionSourceInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "CollectionSource";

    /**
     * The app that created this source, if applicable. In the case of shareable sources, this app manages this source's conditions and selections exclusively.
     */
    public function selectApp(?ShopifyCollectionSourceAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
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

    public function onCollectionConditionsSource(): ShopifyCollectionConditionsSourceQueryObject
    {
        $object = new ShopifyCollectionConditionsSourceQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionSubCollectionsSource(): ShopifyCollectionSubCollectionsSourceQueryObject
    {
        $object = new ShopifyCollectionSubCollectionsSourceQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
