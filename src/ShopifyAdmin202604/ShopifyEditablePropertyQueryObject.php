<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The attribute editable information.
 */
class ShopifyEditablePropertyQueryObject extends QueryObject
{
    const OBJECT_NAME = "EditableProperty";

    /**
     * Whether the attribute is locked for editing.
     */
    public function selectLocked(): static
    {
        $this->selectField("locked");

        return $this;
    }

    /**
     * The reason the attribute is locked for editing.
     */
    public function selectReason(): static
    {
        $this->selectField("reason");

        return $this;
    }
}
