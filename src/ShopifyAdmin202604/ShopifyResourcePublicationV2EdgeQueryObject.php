<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one ResourcePublicationV2 and a cursor during pagination.
 */
class ShopifyResourcePublicationV2EdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ResourcePublicationV2Edge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ResourcePublicationV2Edge.
     */
    public function selectNode(?ShopifyResourcePublicationV2EdgeNodeArgumentsObject $argsObject = null): ShopifyResourcePublicationV2QueryObject
    {
        $object = new ShopifyResourcePublicationV2QueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
