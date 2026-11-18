<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one SalesAgreement and a cursor during pagination.
 */
class ShopifySalesAgreementEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SalesAgreementEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of SalesAgreementEdge.
     */
    public function selectNode(?ShopifySalesAgreementEdgeNodeArgumentsObject $argsObject = null): ShopifySalesAgreementInterfaceObject
    {
        $object = new ShopifySalesAgreementInterfaceObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
