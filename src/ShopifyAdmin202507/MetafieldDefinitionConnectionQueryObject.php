<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetafieldDefinitionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionConnection";

    public function selectEdges(MetafieldDefinitionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(MetafieldDefinitionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(MetafieldDefinitionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
