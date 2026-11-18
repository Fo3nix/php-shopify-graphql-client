<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationWebPresenceUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "input"];

    protected $id;
    protected $input;

    /**
     * The ID of the web presence to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The web presence properties to update.
     */
    public function setInput(ShopifyWebPresenceUpdateInputInputObject $shopifyWebPresenceUpdateInputInputObject): static
    {
        $this->input = $shopifyWebPresenceUpdateInputInputObject;

        return $this;
    }
}
