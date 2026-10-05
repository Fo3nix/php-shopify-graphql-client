<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyResourcePublicationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ResourcePublication";

    /**
     * @deprecated Use `publication` instead.
     */
    public function selectChannel(ShopifyResourcePublicationChannelArgumentsObject $argsObject = null)
    {
        $object = new ShopifyChannelQueryObject("channel");
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

    public function selectPublication(ShopifyResourcePublicationPublicationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPublicationQueryObject("publication");
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
