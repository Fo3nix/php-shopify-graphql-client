<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The connection type for the `CustomerSegmentMembers` object.
 */
class ShopifyCustomerSegmentMemberConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerSegmentMemberConnection";

    /**
     * A list of edges.
     */
    public function selectEdges(?ShopifyCustomerSegmentMemberConnectionEdgesArgumentsObject $argsObject = null): ShopifyCustomerSegmentMemberEdgeQueryObject
    {
        $object = new ShopifyCustomerSegmentMemberEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * An object that’s used to retrieve [cursor information](https://shopify.dev/api/usage/pagination-graphql) about the current page.
     */
    public function selectPageInfo(?ShopifyCustomerSegmentMemberConnectionPageInfoArgumentsObject $argsObject = null): ShopifyPageInfoQueryObject
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The statistics for a given segment.
     */
    public function selectStatistics(?ShopifyCustomerSegmentMemberConnectionStatisticsArgumentsObject $argsObject = null): ShopifySegmentStatisticsQueryObject
    {
        $object = new ShopifySegmentStatisticsQueryObject("statistics");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total number of members in a given segment.
     */
    public function selectTotalCount(): static
    {
        $this->selectField("totalCount");

        return $this;
    }
}
