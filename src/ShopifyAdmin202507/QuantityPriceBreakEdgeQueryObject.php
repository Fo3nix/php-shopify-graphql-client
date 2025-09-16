<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class QuantityPriceBreakEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "QuantityPriceBreakEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(QuantityPriceBreakEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new QuantityPriceBreakQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
