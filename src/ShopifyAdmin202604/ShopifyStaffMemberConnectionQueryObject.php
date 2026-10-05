<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyStaffMemberConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "StaffMemberConnection";

    public function selectEdges(ShopifyStaffMemberConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStaffMemberEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyStaffMemberConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStaffMemberQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyStaffMemberConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
