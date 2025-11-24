<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifySegmentMembershipQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentMembership";

    public function selectIsMember()
    {
        $this->selectField("isMember");

        return $this;
    }

    public function selectSegmentId()
    {
        $this->selectField("segmentId");

        return $this;
    }
}
