<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCommentAuthorQueryObject extends QueryObject
{
    const OBJECT_NAME = "CommentAuthor";

    public function selectEmail()
    {
        $this->selectField("email");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }
}
