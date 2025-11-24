<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutProfileEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutProfileEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyCheckoutProfileEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutProfileQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
