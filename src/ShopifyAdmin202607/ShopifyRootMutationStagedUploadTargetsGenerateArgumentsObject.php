<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationStagedUploadTargetsGenerateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields for generating staged uploads.
     */
    public function setInput(array $input): static
    {
        $this->input = $input;

        return $this;
    }
}
