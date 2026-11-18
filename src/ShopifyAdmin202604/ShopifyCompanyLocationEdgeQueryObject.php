<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one CompanyLocation and a cursor during pagination.
 */
class ShopifyCompanyLocationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CompanyLocationEdge.
     */
    public function selectNode(?ShopifyCompanyLocationEdgeNodeArgumentsObject $argsObject = null): ShopifyCompanyLocationQueryObject
    {
        $object = new ShopifyCompanyLocationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
