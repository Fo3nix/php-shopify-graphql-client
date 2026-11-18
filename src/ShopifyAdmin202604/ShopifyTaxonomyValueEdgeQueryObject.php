<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one TaxonomyValue and a cursor during pagination.
 */
class ShopifyTaxonomyValueEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyValueEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of TaxonomyValueEdge.
     */
    public function selectNode(?ShopifyTaxonomyValueEdgeNodeArgumentsObject $argsObject = null): ShopifyTaxonomyValueQueryObject
    {
        $object = new ShopifyTaxonomyValueQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
