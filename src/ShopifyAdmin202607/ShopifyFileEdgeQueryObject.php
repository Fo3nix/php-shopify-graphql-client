<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one File and a cursor during pagination.
 */
class ShopifyFileEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "FileEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of FileEdge.
     */
    public function selectNode(?ShopifyFileEdgeNodeArgumentsObject $argsObject = null): ShopifyFileInterfaceObject
    {
        $object = new ShopifyFileInterfaceObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
