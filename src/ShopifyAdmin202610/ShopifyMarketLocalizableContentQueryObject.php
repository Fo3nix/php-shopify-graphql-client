<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The market localizable content of a resource's field.
 */
class ShopifyMarketLocalizableContentQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketLocalizableContent";

    /**
     * The hash digest representation of the content value.
     */
    public function selectDigest(): static
    {
        $this->selectField("digest");

        return $this;
    }

    /**
     * The resource field that's being localized.
     */
    public function selectKey(): static
    {
        $this->selectField("key");

        return $this;
    }

    /**
     * The content value.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
