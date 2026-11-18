<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationValidationUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["validation", "id"];

    protected $validation;
    protected $id;

    /**
     * The input fields to update a validation.
     */
    public function setValidation(ShopifyValidationUpdateInputInputObject $shopifyValidationUpdateInputInputObject): static
    {
        $this->validation = $shopifyValidationUpdateInputInputObject;

        return $this;
    }

    /**
     * The ID representing the validation to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
