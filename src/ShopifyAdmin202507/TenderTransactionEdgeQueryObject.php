<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class TenderTransactionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TenderTransactionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(TenderTransactionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new TenderTransactionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
