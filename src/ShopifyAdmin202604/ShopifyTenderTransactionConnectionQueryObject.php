<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyTenderTransactionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "TenderTransactionConnection";

    public function selectEdges(ShopifyTenderTransactionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTenderTransactionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyTenderTransactionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTenderTransactionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyTenderTransactionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
