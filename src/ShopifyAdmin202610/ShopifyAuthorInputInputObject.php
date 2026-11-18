<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for an author. Either the `name` or `user_id` fields can be supplied, but never both.
 */
class ShopifyAuthorInputInputObject extends InputObject
{
    protected $name;
    protected $userId;

    /**
     * The author's full name.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The ID of a staff member's account.
     */
    public function setUserId($userId): static
    {
        $this->userId = $userId;

        return $this;
    }
}
