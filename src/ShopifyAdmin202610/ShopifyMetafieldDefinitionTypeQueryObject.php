<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A metafield definition type provides basic foundation and validation for a metafield.
 */
class ShopifyMetafieldDefinitionTypeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionType";

    /**
     * The category associated with the metafield definition type.
     */
    public function selectCategory(): static
    {
        $this->selectField("category");

        return $this;
    }

    /**
     * The name of the type for the metafield definition.
     * See the list of [supported types](https://shopify.dev/apps/metafields/types).
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The supported validations for a metafield definition type.
     */
    public function selectSupportedValidations(?ShopifyMetafieldDefinitionTypeSupportedValidationsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionSupportedValidationQueryObject
    {
        $object = new ShopifyMetafieldDefinitionSupportedValidationQueryObject("supportedValidations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether metafields without a definition can be migrated to a definition of this type.
     */
    public function selectSupportsDefinitionMigrations(): static
    {
        $this->selectField("supportsDefinitionMigrations");

        return $this;
    }

    /**
     * The value type for a metafield created with this definition type.
     *
     * @deprecated `valueType` is deprecated and `name` should be used for type information.
     */
    public function selectValueType(): static
    {
        $this->selectField("valueType");

        return $this;
    }
}
