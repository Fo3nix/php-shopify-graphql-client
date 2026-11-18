<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An error that occurs during the execution of a discount mutation.
 */
class ShopifyDiscountUserErrorQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountUserError";

    /**
     * The error code.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * Extra information about this error.
     */
    public function selectExtraInfo(): static
    {
        $this->selectField("extraInfo");

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
