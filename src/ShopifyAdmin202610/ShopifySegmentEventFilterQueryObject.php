<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A filter that's used to segment customers based on the date that an event occurred. For example, the `product_bought` event filter allows you to segment customers based on what products they've bought.
 */
class ShopifySegmentEventFilterQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentEventFilter";

    /**
     * The localized name of the filter.
     */
    public function selectLocalizedName(): static
    {
        $this->selectField("localizedName");

        return $this;
    }

    /**
     * Whether a file can have multiple values for a single customer.
     */
    public function selectMultiValue(): static
    {
        $this->selectField("multiValue");

        return $this;
    }

    /**
     * The parameters for an event segment filter.
     */
    public function selectParameters(?ShopifySegmentEventFilterParametersArgumentsObject $argsObject = null): ShopifySegmentEventFilterParameterQueryObject
    {
        $object = new ShopifySegmentEventFilterParameterQueryObject("parameters");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The query name of the filter.
     */
    public function selectQueryName(): static
    {
        $this->selectField("queryName");

        return $this;
    }

    /**
     * The return value type for an event segment filter.
     */
    public function selectReturnValueType(): static
    {
        $this->selectField("returnValueType");

        return $this;
    }
}
