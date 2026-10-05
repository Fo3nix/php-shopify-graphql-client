<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReturnPolicyProfileEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnPolicyProfileEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyReturnPolicyProfileEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReturnPolicyProfileQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
