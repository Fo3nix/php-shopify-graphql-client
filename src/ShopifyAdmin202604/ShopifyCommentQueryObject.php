<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A comment on an article.
 */
class ShopifyCommentQueryObject extends QueryObject
{
    const OBJECT_NAME = "Comment";

    /**
     * The article associated with the comment.
     */
    public function selectArticle(?ShopifyCommentArticleArgumentsObject $argsObject = null): ShopifyArticleQueryObject
    {
        $object = new ShopifyArticleQueryObject("article");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The comment’s author.
     */
    public function selectAuthor(?ShopifyCommentAuthorArgumentsObject $argsObject = null): ShopifyCommentAuthorQueryObject
    {
        $object = new ShopifyCommentAuthorQueryObject("author");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The content of the comment.
     */
    public function selectBody(): static
    {
        $this->selectField("body");

        return $this;
    }

    /**
     * The content of the comment, complete with HTML formatting.
     */
    public function selectBodyHtml(): static
    {
        $this->selectField("bodyHtml");

        return $this;
    }

    /**
     * The date and time when the comment was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The paginated list of events associated with the host subject.
     */
    public function selectEvents(?ShopifyCommentEventsArgumentsObject $argsObject = null): ShopifyEventConnectionQueryObject
    {
        $object = new ShopifyEventConnectionQueryObject("events");
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
     * The IP address of the commenter.
     */
    public function selectIp(): static
    {
        $this->selectField("ip");

        return $this;
    }

    /**
     * Whether or not the comment is published.
     */
    public function selectIsPublished(): static
    {
        $this->selectField("isPublished");

        return $this;
    }

    /**
     * The date and time when the comment was published.
     */
    public function selectPublishedAt(): static
    {
        $this->selectField("publishedAt");

        return $this;
    }

    /**
     * The status of the comment.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * The date and time when the comment was last updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }

    /**
     * The user agent of the commenter.
     */
    public function selectUserAgent(): static
    {
        $this->selectField("userAgent");

        return $this;
    }
}
