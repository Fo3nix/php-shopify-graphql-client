<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SellingPlanEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(SellingPlanEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new SellingPlanQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
