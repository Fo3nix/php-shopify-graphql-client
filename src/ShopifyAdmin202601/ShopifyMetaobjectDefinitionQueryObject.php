<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Defines the structure and configuration for a custom data type in Shopify. Each definition specifies the fields, validation rules, and capabilities that apply to all [`Metaobject`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Metaobject) entries created from it.
 *
 * The definition includes field definitions that determine what data to store, access controls for [the Shopify admin](https://shopify.dev/docs/apps/build/custom-data/permissions#admin-permissions) and [Storefront](https://shopify.dev/docs/apps/build/custom-data/permissions#storefront-permissions) APIs, and capabilities such as publishability and translatability. You can track which [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) or [`StaffMember`](https://shopify.dev/docs/api/admin-graphql/latest/objects/StaffMember) created the definition and optionally base it on a [`StandardMetaobjectDefinitionTemplate`](https://shopify.dev/docs/api/admin-graphql/latest/objects/StandardMetaobjectDefinitionTemplate).
 */
class ShopifyMetaobjectDefinitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectDefinition";

    /**
     * Access configuration for the metaobject definition.
     */
    public function selectAccess(?ShopifyMetaobjectDefinitionAccessArgumentsObject $argsObject = null): ShopifyMetaobjectAccessQueryObject
    {
        $object = new ShopifyMetaobjectAccessQueryObject("access");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The capabilities of the metaobject definition.
     */
    public function selectCapabilities(?ShopifyMetaobjectDefinitionCapabilitiesArgumentsObject $argsObject = null): ShopifyMetaobjectCapabilitiesQueryObject
    {
        $object = new ShopifyMetaobjectCapabilitiesQueryObject("capabilities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The app used to create the metaobject definition.
     */
    public function selectCreatedByApp(?ShopifyMetaobjectDefinitionCreatedByAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("createdByApp");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The staff member who created the metaobject definition.
     */
    public function selectCreatedByStaff(?ShopifyMetaobjectDefinitionCreatedByStaffArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("createdByStaff");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The administrative description.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * The key of a field to reference as the display name for each object.
     */
    public function selectDisplayNameKey(): static
    {
        $this->selectField("displayNameKey");

        return $this;
    }

    /**
     * The fields defined for this object type.
     */
    public function selectFieldDefinitions(?ShopifyMetaobjectDefinitionFieldDefinitionsArgumentsObject $argsObject = null): ShopifyMetaobjectFieldDefinitionQueryObject
    {
        $object = new ShopifyMetaobjectFieldDefinitionQueryObject("fieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether this metaobject definition has field whose type can visually represent a metaobject with        the `thumbnailField`.
     */
    public function selectHasThumbnailField(): static
    {
        $this->selectField("hasThumbnailField");

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
     * A paginated connection to the metaobjects associated with the definition.
     */
    public function selectMetaobjects(?ShopifyMetaobjectDefinitionMetaobjectsArgumentsObject $argsObject = null): ShopifyMetaobjectConnectionQueryObject
    {
        $object = new ShopifyMetaobjectConnectionQueryObject("metaobjects");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The count of metaobjects created for the definition.
     */
    public function selectMetaobjectsCount(): static
    {
        $this->selectField("metaobjectsCount");

        return $this;
    }

    /**
     * The human-readable name.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The standard metaobject template associated with the definition.
     */
    public function selectStandardTemplate(?ShopifyMetaobjectDefinitionStandardTemplateArgumentsObject $argsObject = null): ShopifyStandardMetaobjectDefinitionTemplateQueryObject
    {
        $object = new ShopifyStandardMetaobjectDefinitionTemplateQueryObject("standardTemplate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The type of the object definition. Defines the namespace of associated metafields.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }
}
