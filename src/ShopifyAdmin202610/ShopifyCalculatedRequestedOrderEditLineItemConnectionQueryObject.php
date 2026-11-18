<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type for paginating through multiple CalculatedRequestedOrderEditLineItems.
 */
class ShopifyCalculatedRequestedOrderEditLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedRequestedOrderEditLineItemConnection";

    /**
     * The connection between the node and its parent. Each edge contains a minimum of the edge's cursor and the node.
     */
    public function selectEdges(?ShopifyCalculatedRequestedOrderEditLineItemConnectionEdgesArgumentsObject $argsObject = null): ShopifyCalculatedRequestedOrderEditLineItemEdgeQueryObject
    {
        $object = new ShopifyCalculatedRequestedOrderEditLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of nodes that are contained in CalculatedRequestedOrderEditLineItemEdge. You can fetch data about an individual node, or you can follow the edges to fetch data about a collection of related nodes. At each node, you specify the fields that you want to retrieve.
     */
    public function selectNodes(?ShopifyCalculatedRequestedOrderEditLineItemConnectionNodesArgumentsObject $argsObject = null): ShopifyCalculatedRequestedOrderEditLineItemQueryObject
    {
        $object = new ShopifyCalculatedRequestedOrderEditLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * An object that’s used to retrieve [cursor information](https://shopify.dev/api/usage/pagination-graphql) about the current page.
     */
    public function selectPageInfo(?ShopifyCalculatedRequestedOrderEditLineItemConnectionPageInfoArgumentsObject $argsObject = null): ShopifyPageInfoQueryObject
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
