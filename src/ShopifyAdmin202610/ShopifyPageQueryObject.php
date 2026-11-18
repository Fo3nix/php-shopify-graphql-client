<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A standalone content page in the online store. Pages display HTML-formatted content for informational pages like "About Us", contact information, or shipping policies.
 *
 * Each page has a unique handle for URL routing and supports custom template suffixes for specialized layouts. Pages can be published or hidden, and include creation and update timestamps.
 */
class ShopifyPageQueryObject extends QueryObject
{
    const OBJECT_NAME = "Page";

    /**
     * The text content of the page, complete with HTML markup.
     */
    public function selectBody(): static
    {
        $this->selectField("body");

        return $this;
    }

    /**
     * The first 150 characters of the page body. If the page body contains more than 150 characters, additional characters are truncated by ellipses.
     */
    public function selectBodySummary(): static
    {
        $this->selectField("bodySummary");

        return $this;
    }

    /**
     * The date and time (ISO 8601 format) of the page creation.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * A default [cursor](https://shopify.dev/api/usage/pagination-graphql) that returns the single next record, sorted ascending by ID.
     */
    public function selectDefaultCursor(): static
    {
        $this->selectField("defaultCursor");

        return $this;
    }

    /**
     * The paginated list of events associated with the host subject.
     */
    public function selectEvents(?ShopifyPageEventsArgumentsObject $argsObject = null): ShopifyEventConnectionQueryObject
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A unique, human-friendly string for the page.
     * In themes, the Liquid templating language refers to a page by its handle.
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
     * Whether or not the page is visible.
     */
    public function selectIsPublished(): static
    {
        $this->selectField("isPublished");

        return $this;
    }

    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     */
    public function selectMetafield(ShopifyPageMetafieldArgumentsObject $argsObject): ShopifyMetafieldQueryObject
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * List of metafield definitions.
     *
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(?ShopifyPageMetafieldDefinitionsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionConnectionQueryObject
    {
        $object = new ShopifyMetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     */
    public function selectMetafields(?ShopifyPageMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldConnectionQueryObject
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time (ISO 8601 format) when the page became or will become visible.
     * Returns null when the page isn't visible.
     */
    public function selectPublishedAt(): static
    {
        $this->selectField("publishedAt");

        return $this;
    }

    /**
     * The suffix of the template that's used to render the page.
     */
    public function selectTemplateSuffix(): static
    {
        $this->selectField("templateSuffix");

        return $this;
    }

    /**
     * Title of the page.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The published translations associated with the resource.
     */
    public function selectTranslations(ShopifyPageTranslationsArgumentsObject $argsObject): ShopifyTranslationQueryObject
    {
        $object = new ShopifyTranslationQueryObject("translations");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time (ISO 8601 format) of the latest page update.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
