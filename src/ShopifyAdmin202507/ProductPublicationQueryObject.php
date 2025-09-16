<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductPublicationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductPublication";

    public function selectChannel(ProductPublicationChannelArgumentsObject $argsObject = null)
    {
        $object = new ChannelQueryObject("channel");
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

    public function selectProduct(ProductPublicationProductArgumentsObject $argsObject = null)
    {
        $object = new ProductQueryObject("product");
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
