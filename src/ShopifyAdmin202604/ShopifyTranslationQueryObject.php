<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A localized version of a field on a resource. Translations enable merchants to provide content in multiple languages for [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) objects, [`Collection`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection) objects, and other store resources.
 *
 * Each translation specifies the locale, the field being translated (identified by its key), and the translated value. Translations can be market-specific, allowing different content for the same language across different markets, or available globally when no [`Market`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Market) is specified. The `outdated` flag indicates whether the original content has changed since this translation was last updated.
 *
 * Learn more about [managing translated content](https://shopify.dev/docs/apps/build/markets/manage-translated-content).
 */
class ShopifyTranslationQueryObject extends QueryObject
{
    const OBJECT_NAME = "Translation";

    /**
     * On the resource that this translation belongs to, the reference to the value being translated.
     */
    public function selectKey(): static
    {
        $this->selectField("key");

        return $this;
    }

    /**
     * ISO code of the translation locale.
     */
    public function selectLocale(): static
    {
        $this->selectField("locale");

        return $this;
    }

    /**
     * The market that the translation is specific to. Null value means the translation is available in all markets.
     */
    public function selectMarket(?ShopifyTranslationMarketArgumentsObject $argsObject = null): ShopifyMarketQueryObject
    {
        $object = new ShopifyMarketQueryObject("market");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the original content has changed since this translation was updated.
     */
    public function selectOutdated(): static
    {
        $this->selectField("outdated");

        return $this;
    }

    /**
     * The date and time when the translation was updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }

    /**
     * Translation value.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
