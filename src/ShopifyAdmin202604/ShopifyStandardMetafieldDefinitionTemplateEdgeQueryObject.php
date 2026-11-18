<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one StandardMetafieldDefinitionTemplate and a cursor during pagination.
 */
class ShopifyStandardMetafieldDefinitionTemplateEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "StandardMetafieldDefinitionTemplateEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of StandardMetafieldDefinitionTemplateEdge.
     */
    public function selectNode(?ShopifyStandardMetafieldDefinitionTemplateEdgeNodeArgumentsObject $argsObject = null): ShopifyStandardMetafieldDefinitionTemplateQueryObject
    {
        $object = new ShopifyStandardMetafieldDefinitionTemplateQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
