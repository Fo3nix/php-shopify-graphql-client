<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one CollectionPublication and a cursor during pagination.
 */
class ShopifyCollectionPublicationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionPublicationEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CollectionPublicationEdge.
     */
    public function selectNode(?ShopifyCollectionPublicationEdgeNodeArgumentsObject $argsObject = null): ShopifyCollectionPublicationQueryObject
    {
        $object = new ShopifyCollectionPublicationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
