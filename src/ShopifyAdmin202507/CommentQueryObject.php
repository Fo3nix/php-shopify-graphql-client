<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CommentQueryObject extends QueryObject
{
    const OBJECT_NAME = "Comment";

    public function selectArticle(CommentArticleArgumentsObject $argsObject = null)
    {
        $object = new ArticleQueryObject("article");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAuthor(CommentAuthorArgumentsObject $argsObject = null)
    {
        $object = new CommentAuthorQueryObject("author");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBody()
    {
        $this->selectField("body");

        return $this;
    }

    public function selectBodyHtml()
    {
        $this->selectField("bodyHtml");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectEvents(CommentEventsArgumentsObject $argsObject = null)
    {
        $object = new EventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectIp()
    {
        $this->selectField("ip");

        return $this;
    }

    public function selectIsPublished()
    {
        $this->selectField("isPublished");

        return $this;
    }

    public function selectPublishedAt()
    {
        $this->selectField("publishedAt");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }

    public function selectUserAgent()
    {
        $this->selectField("userAgent");

        return $this;
    }
}
