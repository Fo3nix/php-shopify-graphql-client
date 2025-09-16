<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class InventoryQuantityNameQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryQuantityName";

    public function selectBelongsTo()
    {
        $this->selectField("belongsTo");

        return $this;
    }

    public function selectComprises()
    {
        $this->selectField("comprises");

        return $this;
    }

    public function selectDisplayName()
    {
        $this->selectField("displayName");

        return $this;
    }

    public function selectIsInUse()
    {
        $this->selectField("isInUse");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }
}
