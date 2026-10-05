<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetaobjectDefinitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectDefinition";

    public function selectAccess(ShopifyMetaobjectDefinitionAccessArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectAccessQueryObject("access");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCapabilities(ShopifyMetaobjectDefinitionCapabilitiesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectCapabilitiesQueryObject("capabilities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectCreatedByApp(ShopifyMetaobjectDefinitionCreatedByAppArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppQueryObject("createdByApp");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedByStaff(ShopifyMetaobjectDefinitionCreatedByStaffArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStaffMemberQueryObject("createdByStaff");
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

    public function selectDisplayNameKey()
    {
        $this->selectField("displayNameKey");

        return $this;
    }

    public function selectFieldDefinitions(ShopifyMetaobjectDefinitionFieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectFieldDefinitionQueryObject("fieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectHasThumbnailField()
    {
        $this->selectField("hasThumbnailField");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectMetaobjects(ShopifyMetaobjectDefinitionMetaobjectsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectConnectionQueryObject("metaobjects");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetaobjectsCount()
    {
        $this->selectField("metaobjectsCount");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectStandardTemplate(ShopifyMetaobjectDefinitionStandardTemplateArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStandardMetaobjectDefinitionTemplateQueryObject("standardTemplate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
