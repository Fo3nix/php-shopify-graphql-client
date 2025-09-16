<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetafieldDefinitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinition";

    public function selectAccess(MetafieldDefinitionAccessArgumentsObject $argsObject = null)
    {
        $object = new MetafieldAccessQueryObject("access");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCapabilities(MetafieldDefinitionCapabilitiesArgumentsObject $argsObject = null)
    {
        $object = new MetafieldCapabilitiesQueryObject("capabilities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectConstraints(MetafieldDefinitionConstraintsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionConstraintsQueryObject("constraints");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectKey()
    {
        $this->selectField("key");

        return $this;
    }

    public function selectMetafields(MetafieldDefinitionMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafieldsCount()
    {
        $this->selectField("metafieldsCount");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectNamespace()
    {
        $this->selectField("namespace");

        return $this;
    }

    public function selectOwnerType()
    {
        $this->selectField("ownerType");

        return $this;
    }

    public function selectPinnedPosition()
    {
        $this->selectField("pinnedPosition");

        return $this;
    }

    public function selectStandardTemplate(MetafieldDefinitionStandardTemplateArgumentsObject $argsObject = null)
    {
        $object = new StandardMetafieldDefinitionTemplateQueryObject("standardTemplate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectType(MetafieldDefinitionTypeArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionTypeQueryObject("type");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUseAsCollectionCondition()
    {
        $this->selectField("useAsCollectionCondition");

        return $this;
    }

    public function selectValidationStatus()
    {
        $this->selectField("validationStatus");

        return $this;
    }

    public function selectValidations(MetafieldDefinitionValidationsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionValidationQueryObject("validations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
