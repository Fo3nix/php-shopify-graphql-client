<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class QuantityRuleEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "QuantityRuleEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(QuantityRuleEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new QuantityRuleQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
