<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the value captured by a localized field. Localized fields are additional fields required by certain countries on international orders. For example, some countries require additional fields for customs information or tax identification numbers.
 */
class ShopifyLocalizedFieldQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocalizedField";

    /**
     * Country ISO 3166-1 alpha-2 code.
     */
    public function selectCountryCode(): static
    {
        $this->selectField("countryCode");

        return $this;
    }

    /**
     * The localized field keys that are allowed.
     */
    public function selectKey(): static
    {
        $this->selectField("key");

        return $this;
    }

    /**
     * The purpose of this localized field.
     */
    public function selectPurpose(): static
    {
        $this->selectField("purpose");

        return $this;
    }

    /**
     * The localized field title.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The value of the field.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
