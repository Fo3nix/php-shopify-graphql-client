<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyTenderTransactionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TenderTransactionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyTenderTransactionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTenderTransactionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
