<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Metafields enable you to attach additional information to a Shopify resource, such as a [Product](https://shopify.dev/api/admin-graphql/latest/objects/product) or a [Collection](https://shopify.dev/api/admin-graphql/latest/objects/collection).
 * For more information about where you can attach metafields refer to [HasMetafields](https://shopify.dev/api/admin-graphql/latest/interfaces/HasMetafields).
 * Some examples of the data that metafields enable you to store are specifications, size charts, downloadable documents, release dates, images, or part numbers.
 * Metafields are identified by an owner resource, namespace, and key. and store a value along with type information for that value.
 */
class ShopifyMetafieldQueryObject extends QueryObject
{
    const OBJECT_NAME = "Metafield";

    /**
     * The data stored in the resource, represented as a digest.
     */
    public function selectCompareDigest(): static
    {
        $this->selectField("compareDigest");

        return $this;
    }

    /**
     * The date and time when the metafield was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The metafield definition that the metafield belongs to, if any. Returns `null` when the metafield's value doesn't pass validation against the definition with the same namespace and key. To list those metafields, query the definition's `metafields` connection with `validationStatus: INVALID`.
     */
    public function selectDefinition(?ShopifyMetafieldDefinitionArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionQueryObject
    {
        $object = new ShopifyMetafieldDefinitionQueryObject("definition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The description of the metafield.
     *
     * @deprecated This field will be removed in a future release. Use the `description` on the metafield definition instead.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

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
     * The data stored in the metafield in JSON format.
     */
    public function selectJsonValue(): static
    {
        $this->selectField("jsonValue");

        return $this;
    }

    /**
     * The unique identifier for the metafield within its namespace. If the metafield was requested with a combined `namespace.key` value, such as through the `keys` argument, this field returns the combined value.
     */
    public function selectKey(): static
    {
        $this->selectField("key");

        return $this;
    }

    /**
     * The ID of the corresponding resource in the REST Admin API.
     */
    public function selectLegacyResourceId(): static
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    /**
     * The container for a group of metafields that the metafield is associated with.
     */
    public function selectNamespace(): static
    {
        $this->selectField("namespace");

        return $this;
    }

    /**
     * The resource that the metafield is attached to.
     */
    public function selectOwner(?ShopifyMetafieldOwnerArgumentsObject $argsObject = null): ShopifyHasMetafieldsInterfaceObject
    {
        $object = new ShopifyHasMetafieldsInterfaceObject("owner");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The type of resource that the metafield is attached to.
     */
    public function selectOwnerType(): static
    {
        $this->selectField("ownerType");

        return $this;
    }

    /**
     * Returns a reference object if the metafield definition's type is a resource reference.
     */
    public function selectReference(?ShopifyMetafieldReferenceArgumentsObject $argsObject = null): ShopifyMetafieldReferenceUnionObject
    {
        $object = new ShopifyMetafieldReferenceUnionObject("reference");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of reference objects if the metafield's type is a resource reference list.
     */
    public function selectReferences(?ShopifyMetafieldReferencesArgumentsObject $argsObject = null): ShopifyMetafieldReferenceConnectionQueryObject
    {
        $object = new ShopifyMetafieldReferenceConnectionQueryObject("references");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The published translations associated with the resource.
     */
    public function selectTranslations(ShopifyMetafieldTranslationsArgumentsObject $argsObject): ShopifyTranslationQueryObject
    {
        $object = new ShopifyTranslationQueryObject("translations");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The type of data that's stored in the metafield.
     * Refer to the list of [supported types](https://shopify.dev/apps/metafields/types).
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }

    /**
     * The date and time when the metafield was updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }

    /**
     * The data stored in the metafield. Always stored as a string, regardless of the metafield's type.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
