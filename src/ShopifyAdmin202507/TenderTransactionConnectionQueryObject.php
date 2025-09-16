<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class TenderTransactionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "TenderTransactionConnection";

    public function selectEdges(TenderTransactionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new TenderTransactionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(TenderTransactionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new TenderTransactionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(TenderTransactionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
