<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentOrderEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(FulfillmentOrderEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
