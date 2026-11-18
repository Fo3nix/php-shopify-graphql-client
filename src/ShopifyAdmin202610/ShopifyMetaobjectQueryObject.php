<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An instance of custom structured data defined by a [`MetaobjectDefinition`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MetaobjectDefinition). [Metaobjects](https://shopify.dev/docs/apps/build/custom-data#what-are-metaobjects) store reusable data that extends beyond Shopify's standard resources, such as product highlights, size charts, or custom content sections.
 *
 * Each metaobject includes fields that match the field types and validation rules specified in its definition, which also determines the metaobject's capabilities, such as storefront visibility, publishing and translation support. [`Metafields`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Metafield) can reference metaobjects to connect custom data with [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) objects, [`Collection`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection) objects, and other Shopify resources.
 */
class ShopifyMetaobjectQueryObject extends QueryObject
{
    const OBJECT_NAME = "Metaobject";

    /**
     * Metaobject capabilities for this Metaobject.
     */
    public function selectCapabilities(?ShopifyMetaobjectCapabilitiesArgumentsObject $argsObject = null): ShopifyMetaobjectCapabilityDataQueryObject
    {
        $object = new ShopifyMetaobjectCapabilityDataQueryObject("capabilities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * When the object was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The app used to create the object.
     */
    public function selectCreatedBy(?ShopifyMetaobjectCreatedByArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("createdBy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The app used to create the object.
     */
    public function selectCreatedByApp(?ShopifyMetaobjectCreatedByAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("createdByApp");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The staff member who created the metaobject.
     */
    public function selectCreatedByStaff(?ShopifyMetaobjectCreatedByStaffArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("createdByStaff");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The MetaobjectDefinition that models this object type.
     */
    public function selectDefinition(?ShopifyMetaobjectDefinitionArgumentsObject $argsObject = null): ShopifyMetaobjectDefinitionQueryObject
    {
        $object = new ShopifyMetaobjectDefinitionQueryObject("definition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The preferred display name field value of the metaobject.
     */
    public function selectDisplayName(): static
    {
        $this->selectField("displayName");

        return $this;
    }

    /**
     * The field for an object key, or null if the key has no field definition.
     */
    public function selectField_(ShopifyMetaobjectFieldArgumentsObject $argsObject): ShopifyMetaobjectFieldQueryObject
    {
        $object = new ShopifyMetaobjectFieldQueryObject("field");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * All ordered fields of the metaobject with their definitions and values.
     */
    public function selectFields(?ShopifyMetaobjectFieldsArgumentsObject $argsObject = null): ShopifyMetaobjectFieldQueryObject
    {
        $object = new ShopifyMetaobjectFieldQueryObject("fields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The unique handle of the object, useful as a custom ID.
     */
    public function selectHandle(): static
    {
        $this->selectField("handle");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * List of back references metafields that belong to the resource.
     */
    public function selectReferencedBy(?ShopifyMetaobjectReferencedByArgumentsObject $argsObject = null): ShopifyMetafieldRelationConnectionQueryObject
    {
        $object = new ShopifyMetafieldRelationConnectionQueryObject("referencedBy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The staff member who created the metaobject.
     *
     * @deprecated Use `createdByStaff` instead.
     */
    public function selectStaffMember(?ShopifyMetaobjectStaffMemberArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("staffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The recommended field to visually represent this metaobject. May be a file reference or color         field.
     */
    public function selectThumbnailField(?ShopifyMetaobjectThumbnailFieldArgumentsObject $argsObject = null): ShopifyMetaobjectFieldQueryObject
    {
        $object = new ShopifyMetaobjectFieldQueryObject("thumbnailField");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The type of the metaobject.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }

    /**
     * When the object was last updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }

    /**
     * The values of the metaobject.
     */
    public function selectValues(): static
    {
        $this->selectField("values");

        return $this;
    }
}
