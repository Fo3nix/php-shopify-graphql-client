<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyScriptTagConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ScriptTagConnection";

    public function selectEdges(ShopifyScriptTagConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyScriptTagEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyScriptTagConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyScriptTagQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyScriptTagConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
