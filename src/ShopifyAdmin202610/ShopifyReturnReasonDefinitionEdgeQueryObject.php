<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReturnReasonDefinitionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnReasonDefinitionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyReturnReasonDefinitionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnReasonDefinitionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
