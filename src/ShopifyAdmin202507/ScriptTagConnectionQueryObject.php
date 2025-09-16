<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ScriptTagConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ScriptTagConnection";

    public function selectEdges(ScriptTagConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ScriptTagEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ScriptTagConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ScriptTagQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ScriptTagConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
