<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AbandonedCheckoutEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AbandonedCheckoutEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(AbandonedCheckoutEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new AbandonedCheckoutQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
