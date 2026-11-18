<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type for paginating through multiple QuantityPriceBreaks.
 */
class ShopifyQuantityPriceBreakConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "QuantityPriceBreakConnection";

    /**
     * The connection between the node and its parent. Each edge contains a minimum of the edge's cursor and the node.
     */
    public function selectEdges(?ShopifyQuantityPriceBreakConnectionEdgesArgumentsObject $argsObject = null): ShopifyQuantityPriceBreakEdgeQueryObject
    {
        $object = new ShopifyQuantityPriceBreakEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of nodes that are contained in QuantityPriceBreakEdge. You can fetch data about an individual node, or you can follow the edges to fetch data about a collection of related nodes. At each node, you specify the fields that you want to retrieve.
     */
    public function selectNodes(?ShopifyQuantityPriceBreakConnectionNodesArgumentsObject $argsObject = null): ShopifyQuantityPriceBreakQueryObject
    {
        $object = new ShopifyQuantityPriceBreakQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * An object that’s used to retrieve [cursor information](https://shopify.dev/api/usage/pagination-graphql) about the current page.
     */
    public function selectPageInfo(?ShopifyQuantityPriceBreakConnectionPageInfoArgumentsObject $argsObject = null): ShopifyPageInfoQueryObject
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
