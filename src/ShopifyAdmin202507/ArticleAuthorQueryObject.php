<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ArticleAuthorQueryObject extends QueryObject
{
    const OBJECT_NAME = "ArticleAuthor";

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }
}
