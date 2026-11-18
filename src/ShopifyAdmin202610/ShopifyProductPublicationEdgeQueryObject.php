<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one ProductPublication and a cursor during pagination.
 */
class ShopifyProductPublicationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductPublicationEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ProductPublicationEdge.
     */
    public function selectNode(?ShopifyProductPublicationEdgeNodeArgumentsObject $argsObject = null): ShopifyProductPublicationQueryObject
    {
        $object = new ShopifyProductPublicationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
