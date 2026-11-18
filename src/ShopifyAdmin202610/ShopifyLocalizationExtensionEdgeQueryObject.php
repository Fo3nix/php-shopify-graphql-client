<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one LocalizationExtension and a cursor during pagination.
 */
class ShopifyLocalizationExtensionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocalizationExtensionEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of LocalizationExtensionEdge.
     */
    public function selectNode(?ShopifyLocalizationExtensionEdgeNodeArgumentsObject $argsObject = null): ShopifyLocalizationExtensionQueryObject
    {
        $object = new ShopifyLocalizationExtensionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
