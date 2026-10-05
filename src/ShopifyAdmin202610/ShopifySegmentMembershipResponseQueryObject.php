<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySegmentMembershipResponseQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentMembershipResponse";

    public function selectMemberships(ShopifySegmentMembershipResponseMembershipsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySegmentMembershipQueryObject("memberships");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
