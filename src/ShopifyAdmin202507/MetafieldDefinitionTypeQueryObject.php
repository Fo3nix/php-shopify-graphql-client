<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetafieldDefinitionTypeQueryObject extends QueryObject
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

    public function selectSupportedValidations(MetafieldDefinitionTypeSupportedValidationsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionSupportedValidationQueryObject("supportedValidations");
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
