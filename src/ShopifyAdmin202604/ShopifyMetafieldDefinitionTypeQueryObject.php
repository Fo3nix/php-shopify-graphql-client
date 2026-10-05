<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetafieldDefinitionTypeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionType";

    public function selectCategory()
    {
        $this->selectField("category");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectSupportedValidations(ShopifyMetafieldDefinitionTypeSupportedValidationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionSupportedValidationQueryObject("supportedValidations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSupportsDefinitionMigrations()
    {
        $this->selectField("supportsDefinitionMigrations");

        return $this;
    }

    /**
     * @deprecated `valueType` is deprecated and `name` should be used for type information.
     */
    public function selectValueType()
    {
        $this->selectField("valueType");

        return $this;
    }
}
