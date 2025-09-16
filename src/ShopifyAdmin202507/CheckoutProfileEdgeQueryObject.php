<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutProfileEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutProfileEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(CheckoutProfileEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new CheckoutProfileQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
