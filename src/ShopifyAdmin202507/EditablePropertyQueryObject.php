<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class EditablePropertyQueryObject extends QueryObject
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
