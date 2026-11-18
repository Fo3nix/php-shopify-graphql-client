<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The connection type for SearchResult.
 */
class ShopifySearchResultConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SearchResultConnection";

    /**
     * The connection between the node and its parent. Each edge contains a minimum of the edge's cursor and the node.
     */
    public function selectEdges(?ShopifySearchResultConnectionEdgesArgumentsObject $argsObject = null): ShopifySearchResultEdgeQueryObject
    {
        $object = new ShopifySearchResultEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * An object that’s used to retrieve [cursor information](https://shopify.dev/api/usage/pagination-graphql) about the current page.
     */
    public function selectPageInfo(?ShopifySearchResultConnectionPageInfoArgumentsObject $argsObject = null): ShopifyPageInfoQueryObject
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * An object that’s used to retrieve [cursor information](https://shopify.dev/api/usage/pagination-graphql) about the current page.
     *
     * @deprecated The provided information is not accurate.
     */
    public function selectResultsAfterCount(): static
    {
        $this->selectField("resultsAfterCount");

        return $this;
    }
}
