<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one OrderAttributionDefinition and a cursor during pagination.
 */
class ShopifyOrderAttributionDefinitionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderAttributionDefinitionEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of OrderAttributionDefinitionEdge.
     */
    public function selectNode(?ShopifyOrderAttributionDefinitionEdgeNodeArgumentsObject $argsObject = null): ShopifyOrderAttributionDefinitionQueryObject
    {
        $object = new ShopifyOrderAttributionDefinitionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
