<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The type and name for the optional validation configuration of a metafield.
 *
 * For example, a supported validation might consist of a `max` name and a `number_integer` type.
 * This validation can then be used to enforce a maximum character length for a `single_line_text_field` metafield.
 */
class ShopifyMetafieldDefinitionSupportedValidationQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionSupportedValidation";

    /**
     * The name of the metafield definition validation.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The type of input for the validation.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }
}
