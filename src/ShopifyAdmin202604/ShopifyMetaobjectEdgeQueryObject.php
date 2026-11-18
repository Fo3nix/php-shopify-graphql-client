<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one Metaobject and a cursor during pagination.
 */
class ShopifyMetaobjectEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of MetaobjectEdge.
     */
    public function selectNode(?ShopifyMetaobjectEdgeNodeArgumentsObject $argsObject = null): ShopifyMetaobjectQueryObject
    {
        $object = new ShopifyMetaobjectQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
