<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentLineItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(FulfillmentLineItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
