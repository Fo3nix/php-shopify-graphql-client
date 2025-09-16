<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerSegmentMemberConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerSegmentMemberConnection";

    public function selectEdges(CustomerSegmentMemberConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new CustomerSegmentMemberEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(CustomerSegmentMemberConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStatistics(CustomerSegmentMemberConnectionStatisticsArgumentsObject $argsObject = null)
    {
        $object = new SegmentStatisticsQueryObject("statistics");
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
