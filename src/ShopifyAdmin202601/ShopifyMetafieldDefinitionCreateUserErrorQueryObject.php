<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An error that occurs during the execution of `MetafieldDefinitionCreate`.
 */
class ShopifyMetafieldDefinitionCreateUserErrorQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionCreateUserError";

    /**
     * The error code.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * The index of the array element that's causing the error.
     */
    public function selectElementIndex(): static
    {
        $this->selectField("elementIndex");

        return $this;
    }

    /**
     * The path to the input field that caused the error.
     */
    public function selectField_(): static
    {
        $this->selectField("field");

        return $this;
    }

    /**
     * The error message.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }
}
