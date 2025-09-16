<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentsBalanceTransactionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsBalanceTransactionConnection";

    public function selectEdges(ShopifyPaymentsBalanceTransactionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsBalanceTransactionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyPaymentsBalanceTransactionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsBalanceTransactionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyPaymentsBalanceTransactionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
