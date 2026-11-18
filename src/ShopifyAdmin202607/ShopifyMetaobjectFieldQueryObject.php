<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Provides a field definition and the data value assigned to it.
 */
class ShopifyMetaobjectFieldQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectField";

    /**
     * The field definition for this object key.
     */
    public function selectDefinition(?ShopifyMetaobjectFieldDefinitionArgumentsObject $argsObject = null): ShopifyMetaobjectFieldDefinitionQueryObject
    {
        $object = new ShopifyMetaobjectFieldDefinitionQueryObject("definition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The assigned field value in JSON format.
     */
    public function selectJsonValue(): static
    {
        $this->selectField("jsonValue");

        return $this;
    }

    /**
     * The object key of this field.
     */
    public function selectKey(): static
    {
        $this->selectField("key");

        return $this;
    }

    /**
     * For resource reference fields, provides the referenced object.
     */
    public function selectReference(?ShopifyMetaobjectFieldReferenceArgumentsObject $argsObject = null): ShopifyMetafieldReferenceUnionObject
    {
        $object = new ShopifyMetafieldReferenceUnionObject("reference");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * For resource reference list fields, provides the list of referenced objects.
     */
    public function selectReferences(?ShopifyMetaobjectFieldReferencesArgumentsObject $argsObject = null): ShopifyMetafieldReferenceConnectionQueryObject
    {
        $object = new ShopifyMetafieldReferenceConnectionQueryObject("references");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * For file reference or color fields, provides visual attributes for this field.
     */
    public function selectThumbnail(?ShopifyMetaobjectFieldThumbnailArgumentsObject $argsObject = null): ShopifyMetaobjectThumbnailQueryObject
    {
        $object = new ShopifyMetaobjectThumbnailQueryObject("thumbnail");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The type of the field.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }

    /**
     * The assigned field value, always stored as a string regardless of the field type.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
