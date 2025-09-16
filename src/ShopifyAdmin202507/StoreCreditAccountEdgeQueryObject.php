<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class StoreCreditAccountEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "StoreCreditAccountEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(StoreCreditAccountEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new StoreCreditAccountQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
