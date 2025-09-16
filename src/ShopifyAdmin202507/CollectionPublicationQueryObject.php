<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CollectionPublicationQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionPublication";

    /**
     * @deprecated Use `publication` instead.
     */
    public function selectChannel(CollectionPublicationChannelArgumentsObject $argsObject = null)
    {
        $object = new ChannelQueryObject("channel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCollection(CollectionPublicationCollectionArgumentsObject $argsObject = null)
    {
        $object = new CollectionQueryObject("collection");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectIsPublished()
    {
        $this->selectField("isPublished");

        return $this;
    }

    public function selectPublication(CollectionPublicationPublicationArgumentsObject $argsObject = null)
    {
        $object = new PublicationQueryObject("publication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPublishDate()
    {
        $this->selectField("publishDate");

        return $this;
    }
}
