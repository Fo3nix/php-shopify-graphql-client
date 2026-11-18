<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The name and value for a metafield definition validation.
 *
 * For example, for a metafield definition of `single_line_text_field` type, you can set a validation with the name `min` and a value of `10`.
 * This validation will ensure that the value of the metafield is at least 10 characters.
 *
 * Refer to the [list of supported validations](https://shopify.dev/docs/apps/build/metafields/list-of-validation-options).
 */
class ShopifyMetafieldDefinitionValidationInputInputObject extends InputObject
{
    const REQUIRED = ["name", "value"];

    protected $name;
    protected $value;

    /**
     * The name for the metafield definition validation.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The value for the metafield definition validation.
     */
    public function setValue($value): static
    {
        $this->value = $value;

        return $this;
    }
}
