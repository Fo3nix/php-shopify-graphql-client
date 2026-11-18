<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one AppInstallation and a cursor during pagination.
 */
class ShopifyAppInstallationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppInstallationEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of AppInstallationEdge.
     */
    public function selectNode(?ShopifyAppInstallationEdgeNodeArgumentsObject $argsObject = null): ShopifyAppInstallationQueryObject
    {
        $object = new ShopifyAppInstallationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
