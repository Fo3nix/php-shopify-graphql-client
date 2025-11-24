<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifySearchResultQueryObject extends QueryObject
{
    const OBJECT_NAME = "SearchResult";

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectImage(ShopifySearchResultImageArgumentsObject $argsObject = null)
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }
}
