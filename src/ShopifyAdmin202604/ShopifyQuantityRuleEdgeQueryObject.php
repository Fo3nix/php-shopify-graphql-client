<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyQuantityRuleEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "QuantityRuleEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyQuantityRuleEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyQuantityRuleQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
