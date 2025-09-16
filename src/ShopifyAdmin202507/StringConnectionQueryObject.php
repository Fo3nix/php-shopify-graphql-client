<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class StringConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "StringConnection";

    public function selectEdges(StringConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new StringEdgeQueryObject("edges");
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

    public function selectPageInfo(StringConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
