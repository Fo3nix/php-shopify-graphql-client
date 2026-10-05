<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerSegmentMemberConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerSegmentMemberConnection";

    public function selectEdges(ShopifyCustomerSegmentMemberConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerSegmentMemberEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyCustomerSegmentMemberConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStatistics(ShopifyCustomerSegmentMemberConnectionStatisticsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySegmentStatisticsQueryObject("statistics");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalCount()
    {
        $this->selectField("totalCount");

        return $this;
    }
}
