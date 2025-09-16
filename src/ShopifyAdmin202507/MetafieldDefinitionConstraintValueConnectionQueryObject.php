<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetafieldDefinitionConstraintValueConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionConstraintValueConnection";

    public function selectEdges(MetafieldDefinitionConstraintValueConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionConstraintValueEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(MetafieldDefinitionConstraintValueConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionConstraintValueQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(MetafieldDefinitionConstraintValueConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
