<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReverseFulfillmentOrderEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseFulfillmentOrderEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ReverseFulfillmentOrderEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ReverseFulfillmentOrderQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
