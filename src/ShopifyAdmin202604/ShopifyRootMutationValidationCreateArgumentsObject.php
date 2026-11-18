<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationValidationCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["validation"];

    protected $validation;

    /**
     * The input fields for a new validation.
     */
    public function setValidation(ShopifyValidationCreateInputInputObject $shopifyValidationCreateInputInputObject): static
    {
        $this->validation = $shopifyValidationCreateInputInputObject;

        return $this;
    }
}
