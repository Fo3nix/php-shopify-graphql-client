<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyArticleAuthorQueryObject extends QueryObject
{
    const OBJECT_NAME = "ArticleAuthor";

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }
}
