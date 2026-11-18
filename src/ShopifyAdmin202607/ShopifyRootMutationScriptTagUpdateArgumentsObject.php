<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationScriptTagUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "input"];

    protected $id;
    protected $input;

    /**
     * The ID of the script tag to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Specifies the input fields for a script tag.
     */
    public function setInput(ShopifyScriptTagInputInputObject $shopifyScriptTagInputInputObject): static
    {
        $this->input = $shopifyScriptTagInputInputObject;

        return $this;
    }
}
