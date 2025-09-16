<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SegmentMembershipResponseQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentMembershipResponse";

    public function selectMemberships(SegmentMembershipResponseMembershipsArgumentsObject $argsObject = null)
    {
        $object = new SegmentMembershipQueryObject("memberships");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
