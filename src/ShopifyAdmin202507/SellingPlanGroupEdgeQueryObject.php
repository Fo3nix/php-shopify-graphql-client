<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SellingPlanGroupEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanGroupEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(SellingPlanGroupEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new SellingPlanGroupQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
