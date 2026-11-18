<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one TaxonomyCategory and a cursor during pagination.
 */
class ShopifyTaxonomyCategoryEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyCategoryEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of TaxonomyCategoryEdge.
     */
    public function selectNode(?ShopifyTaxonomyCategoryEdgeNodeArgumentsObject $argsObject = null): ShopifyTaxonomyCategoryQueryObject
    {
        $object = new ShopifyTaxonomyCategoryQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
