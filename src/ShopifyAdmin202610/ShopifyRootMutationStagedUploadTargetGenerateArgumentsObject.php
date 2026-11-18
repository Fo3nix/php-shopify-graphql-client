<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationStagedUploadTargetGenerateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["input"];

    protected $input;

    /**
     * The input fields for generating a staged upload.
     */
    public function setInput(ShopifyStagedUploadTargetGenerateInputInputObject $shopifyStagedUploadTargetGenerateInputInputObject): static
    {
        $this->input = $shopifyStagedUploadTargetGenerateInputInputObject;

        return $this;
    }
}
