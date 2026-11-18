<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one MetaobjectDefinition and a cursor during pagination.
 */
class ShopifyMetaobjectDefinitionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectDefinitionEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of MetaobjectDefinitionEdge.
     */
    public function selectNode(?ShopifyMetaobjectDefinitionEdgeNodeArgumentsObject $argsObject = null): ShopifyMetaobjectDefinitionQueryObject
    {
        $object = new ShopifyMetaobjectDefinitionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
