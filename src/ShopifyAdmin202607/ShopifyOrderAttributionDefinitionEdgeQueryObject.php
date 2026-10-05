<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOrderAttributionDefinitionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderAttributionDefinitionEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyOrderAttributionDefinitionEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderAttributionDefinitionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
