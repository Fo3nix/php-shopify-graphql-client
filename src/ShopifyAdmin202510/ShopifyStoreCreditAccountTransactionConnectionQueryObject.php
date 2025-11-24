<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyStoreCreditAccountTransactionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "StoreCreditAccountTransactionConnection";

    public function selectEdges(ShopifyStoreCreditAccountTransactionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStoreCreditAccountTransactionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyStoreCreditAccountTransactionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
