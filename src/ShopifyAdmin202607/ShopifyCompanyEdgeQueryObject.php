<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one Company and a cursor during pagination.
 */
class ShopifyCompanyEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CompanyEdge.
     */
    public function selectNode(?ShopifyCompanyEdgeNodeArgumentsObject $argsObject = null): ShopifyCompanyQueryObject
    {
        $object = new ShopifyCompanyQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
