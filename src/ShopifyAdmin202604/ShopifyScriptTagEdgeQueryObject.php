<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyScriptTagEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ScriptTagEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyScriptTagEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyScriptTagQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
