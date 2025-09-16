<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetaobjectQueryObject extends QueryObject
{
    const OBJECT_NAME = "Metaobject";

    public function selectCapabilities(MetaobjectCapabilitiesArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectCapabilityDataQueryObject("capabilities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedBy(MetaobjectCreatedByArgumentsObject $argsObject = null)
    {
        $object = new AppQueryObject("createdBy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedByApp(MetaobjectCreatedByAppArgumentsObject $argsObject = null)
    {
        $object = new AppQueryObject("createdByApp");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedByStaff(MetaobjectCreatedByStaffArgumentsObject $argsObject = null)
    {
        $object = new StaffMemberQueryObject("createdByStaff");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDefinition(MetaobjectDefinitionArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectDefinitionQueryObject("definition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDisplayName()
    {
        $this->selectField("displayName");

        return $this;
    }

    public function selectField(MetaobjectFieldArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectFieldQueryObject("field");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFields(MetaobjectFieldsArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectFieldQueryObject("fields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectHandle()
    {
        $this->selectField("handle");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectReferencedBy(MetaobjectReferencedByArgumentsObject $argsObject = null)
    {
        $object = new MetafieldRelationConnectionQueryObject("referencedBy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `createdByStaff` instead.
     */
    public function selectStaffMember(MetaobjectStaffMemberArgumentsObject $argsObject = null)
    {
        $object = new StaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectThumbnailField(MetaobjectThumbnailFieldArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectFieldQueryObject("thumbnailField");
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
