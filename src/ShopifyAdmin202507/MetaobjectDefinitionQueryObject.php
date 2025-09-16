<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetaobjectDefinitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectDefinition";

    public function selectAccess(MetaobjectDefinitionAccessArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectAccessQueryObject("access");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCapabilities(MetaobjectDefinitionCapabilitiesArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectCapabilitiesQueryObject("capabilities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedByApp(MetaobjectDefinitionCreatedByAppArgumentsObject $argsObject = null)
    {
        $object = new AppQueryObject("createdByApp");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedByStaff(MetaobjectDefinitionCreatedByStaffArgumentsObject $argsObject = null)
    {
        $object = new StaffMemberQueryObject("createdByStaff");
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

    public function selectFieldDefinitions(MetaobjectDefinitionFieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectFieldDefinitionQueryObject("fieldDefinitions");
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

    public function selectMetaobjects(MetaobjectDefinitionMetaobjectsArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectConnectionQueryObject("metaobjects");
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

    public function selectStandardTemplate(MetaobjectDefinitionStandardTemplateArgumentsObject $argsObject = null)
    {
        $object = new StandardMetaobjectDefinitionTemplateQueryObject("standardTemplate");
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
}
