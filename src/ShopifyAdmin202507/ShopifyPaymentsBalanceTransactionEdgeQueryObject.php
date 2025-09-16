<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentsBalanceTransactionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsBalanceTransactionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyPaymentsBalanceTransactionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsBalanceTransactionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
