<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class StaffMemberConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "StaffMemberConnection";

    public function selectEdges(StaffMemberConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new StaffMemberEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(StaffMemberConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new StaffMemberQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(StaffMemberConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
