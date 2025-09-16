<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DraftOrderConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderConnection";

    public function selectEdges(DraftOrderConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(DraftOrderConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(DraftOrderConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
