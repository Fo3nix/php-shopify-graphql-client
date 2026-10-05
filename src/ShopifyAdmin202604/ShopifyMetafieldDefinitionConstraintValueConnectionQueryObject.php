<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetafieldDefinitionConstraintValueConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionConstraintValueConnection";

    public function selectEdges(ShopifyMetafieldDefinitionConstraintValueConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionConstraintValueEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyMetafieldDefinitionConstraintValueConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionConstraintValueQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyMetafieldDefinitionConstraintValueConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
