<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An article that contains content, author information, and metadata. Articles belong to a [`Blog`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Blog) and can include HTML-formatted body text, summary text, and an associated image. Merchants publish articles to share content, drive traffic, and engage customers.
 *
 * Articles can be organized with tags and published immediately or scheduled for future publication using the [`publishedAt`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Article#field-Article.fields.publishedAt) timestamp. The API manages comments on articles when the blog's comment policy enables them.
 */
class ShopifyArticleQueryObject extends QueryObject
{
    const OBJECT_NAME = "Article";

    /**
     * The name of the author of the article.
     */
    public function selectAuthor(?ShopifyArticleAuthorArgumentsObject $argsObject = null): ShopifyArticleAuthorQueryObject
    {
        $object = new ShopifyArticleAuthorQueryObject("author");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The blog containing the article.
     */
    public function selectBlog(?ShopifyArticleBlogArgumentsObject $argsObject = null): ShopifyBlogQueryObject
    {
        $object = new ShopifyBlogQueryObject("blog");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The text of the article's body, complete with HTML markup.
     */
    public function selectBody(): static
    {
        $this->selectField("body");

        return $this;
    }

    /**
     * List of the article's comments.
     */
    public function selectComments(?ShopifyArticleCommentsArgumentsObject $argsObject = null): ShopifyCommentConnectionQueryObject
    {
        $object = new ShopifyCommentConnectionQueryObject("comments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Count of comments. Limited to a maximum of 10000 by default.
     */
    public function selectCommentsCount(?ShopifyArticleCommentsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("commentsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time (ISO 8601 format) when the article was created.
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
    public function selectEvents(?ShopifyArticleEventsArgumentsObject $argsObject = null): ShopifyEventConnectionQueryObject
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A unique, human-friendly string for the article that's automatically generated from the article's title.
     * The handle is used in the article's URL.
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
     * The image associated with the article.
     */
    public function selectImage(?ShopifyArticleImageArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether or not the article is visible.
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
    public function selectMetafield(ShopifyArticleMetafieldArgumentsObject $argsObject): ShopifyMetafieldQueryObject
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
    public function selectMetafieldDefinitions(?ShopifyArticleMetafieldDefinitionsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionConnectionQueryObject
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
    public function selectMetafields(?ShopifyArticleMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldConnectionQueryObject
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time (ISO 8601 format) when the article became or will become visible.
     * Returns null when the article isn't visible.
     */
    public function selectPublishedAt(): static
    {
        $this->selectField("publishedAt");

        return $this;
    }

    /**
     * A summary of the article, which can include HTML markup.
     * The summary is used by the online store theme to display the article on other pages, such as the home page or the main blog page.
     */
    public function selectSummary(): static
    {
        $this->selectField("summary");

        return $this;
    }

    /**
     * A comma-separated list of tags.
     * Tags are additional short descriptors formatted as a string of comma-separated values.
     */
    public function selectTags(): static
    {
        $this->selectField("tags");

        return $this;
    }

    /**
     * The name of the template an article is using if it's using an alternate template.
     * If an article is using the default `article.liquid` template, then the value returned is `null`.
     */
    public function selectTemplateSuffix(): static
    {
        $this->selectField("templateSuffix");

        return $this;
    }

    /**
     * The title of the article.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The published translations associated with the resource.
     */
    public function selectTranslations(ShopifyArticleTranslationsArgumentsObject $argsObject): ShopifyTranslationQueryObject
    {
        $object = new ShopifyTranslationQueryObject("translations");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time (ISO 8601 format) when the article was last updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
