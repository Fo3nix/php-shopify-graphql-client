<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one ResourcePublication and a cursor during pagination.
 */
class ShopifyResourcePublicationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ResourcePublicationEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ResourcePublicationEdge.
     */
    public function selectNode(?ShopifyResourcePublicationEdgeNodeArgumentsObject $argsObject = null): ShopifyResourcePublicationQueryObject
    {
        $object = new ShopifyResourcePublicationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
