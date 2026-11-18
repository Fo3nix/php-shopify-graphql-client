<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Translatable content of a resource's field.
 */
class ShopifyTranslatableContentQueryObject extends QueryObject
{
    const OBJECT_NAME = "TranslatableContent";

    /**
     * Hash digest representation of the content value.
     */
    public function selectDigest(): static
    {
        $this->selectField("digest");

        return $this;
    }

    /**
     * The resource field that's being translated.
     */
    public function selectKey(): static
    {
        $this->selectField("key");

        return $this;
    }

    /**
     * Locale of the content.
     */
    public function selectLocale(): static
    {
        $this->selectField("locale");

        return $this;
    }

    /**
     * Type of the translatable content.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }

    /**
     * Content value.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
