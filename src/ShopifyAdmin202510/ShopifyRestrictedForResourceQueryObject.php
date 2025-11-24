<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRestrictedForResourceQueryObject extends QueryObject
{
    const OBJECT_NAME = "RestrictedForResource";

    public function selectRestricted()
    {
        $this->selectField("restricted");

        return $this;
    }

    public function selectRestrictedReason()
    {
        $this->selectField("restrictedReason");

        return $this;
    }
}
