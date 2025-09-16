<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class LocalizedFieldConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocalizedFieldConnection";

    public function selectEdges(LocalizedFieldConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new LocalizedFieldEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(LocalizedFieldConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new LocalizedFieldQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(LocalizedFieldConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
