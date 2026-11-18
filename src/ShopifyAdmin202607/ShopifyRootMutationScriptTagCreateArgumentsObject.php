<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationScriptTagCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields for a script tag.
     */
    public function setInput(ShopifyScriptTagInputInputObject $shopifyScriptTagInputInputObject): static
    {
        $this->input = $shopifyScriptTagInputInputObject;

        return $this;
    }
}
