<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A resource in Shopify that contains fields available for translation into different languages. Accesses the resource's translatable content, existing [`Translation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Translation) objects, and any nested resources that can also be translated.
 *
 * The [`TranslatableContent`](https://shopify.dev/docs/api/admin-graphql/latest/objects/TranslatableContent) includes field keys, values, and digest hashes needed when [registering translations](https://shopify.dev/docs/api/admin-graphql/latest/mutations/translationsRegister).
 *
 * You can retrieve translations for specific [`Locale`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Locale) and [`Market`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Market) configurations. Each translation includes an `outdated` flag indicating whether the original content has changed since that translation was last updated.
 *
 * Learn more about [managing translated content](https://shopify.dev/docs/apps/build/markets/manage-translated-content).
 */
class ShopifyTranslatableResourceQueryObject extends QueryObject
{
    const OBJECT_NAME = "TranslatableResource";

    /**
     * Nested translatable resources under the current resource.
     */
    public function selectNestedTranslatableResources(?ShopifyTranslatableResourceNestedTranslatableResourcesArgumentsObject $argsObject = null): ShopifyTranslatableResourceConnectionQueryObject
    {
        $object = new ShopifyTranslatableResourceConnectionQueryObject("nestedTranslatableResources");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * GID of the resource.
     */
    public function selectResourceId(): static
    {
        $this->selectField("resourceId");

        return $this;
    }

    /**
     * Translatable content.
     */
    public function selectTranslatableContent(?ShopifyTranslatableResourceTranslatableContentArgumentsObject $argsObject = null): ShopifyTranslatableContentQueryObject
    {
        $object = new ShopifyTranslatableContentQueryObject("translatableContent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Translatable content translations (includes unpublished locales).
     */
    public function selectTranslations(ShopifyTranslatableResourceTranslationsArgumentsObject $argsObject): ShopifyTranslationQueryObject
    {
        $object = new ShopifyTranslationQueryObject("translations");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }
}
