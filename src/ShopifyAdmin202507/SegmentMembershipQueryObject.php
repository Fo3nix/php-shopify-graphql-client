<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SegmentMembershipQueryObject extends QueryObject
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
