<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootStaffMemberArgumentsObject extends ArgumentsObject
{
    protected $id;

    /**
     * The ID of the staff member to return. If no ID is provided, then the staff member making the query (if any) is returned.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
