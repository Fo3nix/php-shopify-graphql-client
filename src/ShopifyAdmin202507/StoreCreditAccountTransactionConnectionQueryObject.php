<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class StoreCreditAccountTransactionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "StoreCreditAccountTransactionConnection";

    public function selectEdges(StoreCreditAccountTransactionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new StoreCreditAccountTransactionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(StoreCreditAccountTransactionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
