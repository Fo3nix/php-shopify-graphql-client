<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A list of maps that contain `segmentId` IDs and `isMember` Booleans. The maps represent segment memberships.
 */
class ShopifySegmentMembershipResponseQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentMembershipResponse";

    /**
     * The membership status for the given list of segments.
     */
    public function selectMemberships(?ShopifySegmentMembershipResponseMembershipsArgumentsObject $argsObject = null): ShopifySegmentMembershipQueryObject
    {
        $object = new ShopifySegmentMembershipQueryObject("memberships");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
