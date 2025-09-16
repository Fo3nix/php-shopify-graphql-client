<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class StoreCreditAccountConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "StoreCreditAccountConnection";

    public function selectEdges(StoreCreditAccountConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new StoreCreditAccountEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(StoreCreditAccountConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new StoreCreditAccountQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(StoreCreditAccountConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
