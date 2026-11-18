<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A theme for display on the storefront. Themes control the visual appearance and functionality of the online store through templates, stylesheets, and assets that determine how [products](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product), [collections](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection), and other content display to customers.
 *
 * Each theme has a [role](https://shopify.dev/docs/api/admin-graphql/latest/objects/OnlineStoreTheme#field-OnlineStoreTheme.fields.role) that indicates its status. Main themes are live on the storefront, unpublished themes are inactive, demo themes require purchase before publishing, and development themes are temporary for previewing during development. The theme includes [translations](https://shopify.dev/docs/api/admin-graphql/latest/objects/OnlineStoreTheme#field-OnlineStoreTheme.fields.translations) for multi-language support.
 */
class ShopifyOnlineStoreThemeQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreTheme";

    /**
     * The date and time when the theme was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The files in the theme.
     */
    public function selectFiles(?ShopifyOnlineStoreThemeFilesArgumentsObject $argsObject = null): ShopifyOnlineStoreThemeFileConnectionQueryObject
    {
        $object = new ShopifyOnlineStoreThemeFileConnectionQueryObject("files");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
     * The name of the theme, set by the merchant.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The prefix of the theme.
     */
    public function selectPrefix(): static
    {
        $this->selectField("prefix");

        return $this;
    }

    /**
     * Whether the theme is processing.
     */
    public function selectProcessing(): static
    {
        $this->selectField("processing");

        return $this;
    }

    /**
     * Whether the theme processing failed.
     */
    public function selectProcessingFailed(): static
    {
        $this->selectField("processingFailed");

        return $this;
    }

    /**
     * The role of the theme.
     */
    public function selectRole(): static
    {
        $this->selectField("role");

        return $this;
    }

    /**
     * The theme store ID.
     */
    public function selectThemeStoreId(): static
    {
        $this->selectField("themeStoreId");

        return $this;
    }

    /**
     * The published translations associated with the resource.
     */
    public function selectTranslations(ShopifyOnlineStoreThemeTranslationsArgumentsObject $argsObject): ShopifyTranslationQueryObject
    {
        $object = new ShopifyTranslationQueryObject("translations");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the theme was last updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
