<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyEditablePropertyQueryObject extends QueryObject
{
    const OBJECT_NAME = "EditableProperty";

    public function selectLocked()
    {
        $this->selectField("locked");

        return $this;
    }

    public function selectReason()
    {
        $this->selectField("reason");

        return $this;
    }
}
