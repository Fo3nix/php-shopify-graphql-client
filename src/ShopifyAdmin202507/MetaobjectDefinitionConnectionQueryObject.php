<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetaobjectDefinitionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectDefinitionConnection";

    public function selectEdges(MetaobjectDefinitionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectDefinitionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(MetaobjectDefinitionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectDefinitionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(MetaobjectDefinitionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
