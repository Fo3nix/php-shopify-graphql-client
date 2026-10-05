<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAppCreditEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppCreditEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyAppCreditEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppCreditQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
