<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The parameters for an event segment filter.
 */
class ShopifySegmentEventFilterParameterQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentEventFilterParameter";

    /**
     * Whether the parameter accepts a list of values.
     */
    public function selectAcceptsMultipleValues(): static
    {
        $this->selectField("acceptsMultipleValues");

        return $this;
    }

    /**
     * The localized description of the parameter.
     */
    public function selectLocalizedDescription(): static
    {
        $this->selectField("localizedDescription");

        return $this;
    }

    /**
     * The localized name of the parameter.
     */
    public function selectLocalizedName(): static
    {
        $this->selectField("localizedName");

        return $this;
    }

    /**
     * The parameter maximum value range.
     */
    public function selectMaxRange(): static
    {
        $this->selectField("maxRange");

        return $this;
    }

    /**
     * The parameter minimum value range.
     */
    public function selectMinRange(): static
    {
        $this->selectField("minRange");

        return $this;
    }

    /**
     * Whether the parameter is optional.
     */
    public function selectOptional(): static
    {
        $this->selectField("optional");

        return $this;
    }

    /**
     * The type of the parameter.
     */
    public function selectParameterType(): static
    {
        $this->selectField("parameterType");

        return $this;
    }

    /**
     * The query name of the parameter.
     */
    public function selectQueryName(): static
    {
        $this->selectField("queryName");

        return $this;
    }
}
