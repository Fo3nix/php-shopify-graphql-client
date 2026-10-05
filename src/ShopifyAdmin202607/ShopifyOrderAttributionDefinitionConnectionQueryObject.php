<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOrderAttributionDefinitionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderAttributionDefinitionConnection";

    public function selectEdges(ShopifyOrderAttributionDefinitionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderAttributionDefinitionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyOrderAttributionDefinitionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderAttributionDefinitionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyOrderAttributionDefinitionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
