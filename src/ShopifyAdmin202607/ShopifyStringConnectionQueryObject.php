<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyStringConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "StringConnection";

    public function selectEdges(ShopifyStringConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStringEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes()
    {
        $this->selectField("nodes");

        return $this;
    }

    public function selectPageInfo(ShopifyStringConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
