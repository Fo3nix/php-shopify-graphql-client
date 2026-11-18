<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one CashManagementReasonCode and a cursor during pagination.
 */
class ShopifyCashManagementReasonCodeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashManagementReasonCodeEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CashManagementReasonCodeEdge.
     */
    public function selectNode(?ShopifyCashManagementReasonCodeEdgeNodeArgumentsObject $argsObject = null): ShopifyCashManagementReasonCodeUnionObject
    {
        $object = new ShopifyCashManagementReasonCodeUnionObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
