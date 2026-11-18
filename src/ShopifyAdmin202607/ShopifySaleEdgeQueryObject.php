<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one Sale and a cursor during pagination.
 */
class ShopifySaleEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SaleEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of SaleEdge.
     */
    public function selectNode(?ShopifySaleEdgeNodeArgumentsObject $argsObject = null): ShopifySaleInterfaceObject
    {
        $object = new ShopifySaleInterfaceObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
