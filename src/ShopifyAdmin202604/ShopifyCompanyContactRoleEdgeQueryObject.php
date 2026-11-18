<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one CompanyContactRole and a cursor during pagination.
 */
class ShopifyCompanyContactRoleEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactRoleEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CompanyContactRoleEdge.
     */
    public function selectNode(?ShopifyCompanyContactRoleEdgeNodeArgumentsObject $argsObject = null): ShopifyCompanyContactRoleQueryObject
    {
        $object = new ShopifyCompanyContactRoleQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
