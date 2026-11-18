<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one TaxonomyCategoryAttribute and a cursor during pagination.
 */
class ShopifyTaxonomyCategoryAttributeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyCategoryAttributeEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of TaxonomyCategoryAttributeEdge.
     */
    public function selectNode(?ShopifyTaxonomyCategoryAttributeEdgeNodeArgumentsObject $argsObject = null): ShopifyTaxonomyCategoryAttributeUnionObject
    {
        $object = new ShopifyTaxonomyCategoryAttributeUnionObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
