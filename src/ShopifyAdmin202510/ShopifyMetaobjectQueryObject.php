<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetaobjectQueryObject extends QueryObject
{
    const OBJECT_NAME = "Metaobject";

    public function selectCapabilities(ShopifyMetaobjectCapabilitiesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectCapabilityDataQueryObject("capabilities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedBy(ShopifyMetaobjectCreatedByArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppQueryObject("createdBy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedByApp(ShopifyMetaobjectCreatedByAppArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppQueryObject("createdByApp");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedByStaff(ShopifyMetaobjectCreatedByStaffArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStaffMemberQueryObject("createdByStaff");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDefinition(ShopifyMetaobjectDefinitionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectDefinitionQueryObject("definition");
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

    public function selectField(ShopifyMetaobjectFieldArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectFieldQueryObject("field");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFields(ShopifyMetaobjectFieldsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectFieldQueryObject("fields");
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

    public function selectReferencedBy(ShopifyMetaobjectReferencedByArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldRelationConnectionQueryObject("referencedBy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `createdByStaff` instead.
     */
    public function selectStaffMember(ShopifyMetaobjectStaffMemberArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectThumbnailField(ShopifyMetaobjectThumbnailFieldArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectFieldQueryObject("thumbnailField");
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
