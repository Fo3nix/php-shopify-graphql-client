<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AbandonedCheckoutLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AbandonedCheckoutLineItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(AbandonedCheckoutLineItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new AbandonedCheckoutLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
