<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetafieldDefinitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinition";

    public function selectAccess(ShopifyMetafieldDefinitionAccessArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldAccessQueryObject("access");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCapabilities(ShopifyMetafieldDefinitionCapabilitiesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldCapabilitiesQueryObject("capabilities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectConstraints(ShopifyMetafieldDefinitionConstraintsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionConstraintsQueryObject("constraints");
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

    public function selectMetafields(ShopifyMetafieldDefinitionMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
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

    public function selectStandardTemplate(ShopifyMetafieldDefinitionStandardTemplateArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStandardMetafieldDefinitionTemplateQueryObject("standardTemplate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectType(ShopifyMetafieldDefinitionTypeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionTypeQueryObject("type");
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

    public function selectValidations(ShopifyMetafieldDefinitionValidationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionValidationQueryObject("validations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
