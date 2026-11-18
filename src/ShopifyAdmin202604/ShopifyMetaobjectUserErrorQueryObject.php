<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Defines errors encountered while managing metaobject resources.
 */
class ShopifyMetaobjectUserErrorQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectUserError";

    /**
     * The error code.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * The index of the failing list element in an array.
     */
    public function selectElementIndex(): static
    {
        $this->selectField("elementIndex");

        return $this;
    }

    /**
     * The key of the failing object element.
     */
    public function selectElementKey(): static
    {
        $this->selectField("elementKey");

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
