<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAbandonedCheckoutLineItemEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AbandonedCheckoutLineItemEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyAbandonedCheckoutLineItemEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAbandonedCheckoutLineItemQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
