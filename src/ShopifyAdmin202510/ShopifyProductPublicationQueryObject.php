<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductPublicationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductPublication";

    public function selectChannel(ShopifyProductPublicationChannelArgumentsObject $argsObject = null)
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

    public function selectProduct(ShopifyProductPublicationProductArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductQueryObject("product");
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
