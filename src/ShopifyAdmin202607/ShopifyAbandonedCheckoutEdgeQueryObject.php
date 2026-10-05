<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAbandonedCheckoutEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AbandonedCheckoutEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyAbandonedCheckoutEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAbandonedCheckoutQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
