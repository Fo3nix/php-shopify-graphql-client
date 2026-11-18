<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A configured metafield definition validation.
 *
 * For example, for a metafield definition of `number_integer` type, you can set a validation with the name `max`
 * and a value of `15`. This validation will ensure that the value of the metafield is a number less than or equal to 15.
 *
 * Refer to the [list of supported validations](https://shopify.dev/docs/apps/build/metafields/list-of-validation-options).
 */
class ShopifyMetafieldDefinitionValidationQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionValidation";

    /**
     * The validation name.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The name for the metafield type of this validation.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }

    /**
     * The validation value.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
