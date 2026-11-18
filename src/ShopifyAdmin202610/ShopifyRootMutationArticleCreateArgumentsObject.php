<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationArticleCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["article"];

    protected $article;
    protected $blog;

    /**
     * The properties of the new article.
     */
    public function setArticle(ShopifyArticleCreateInputInputObject $shopifyArticleCreateInputInputObject): static
    {
        $this->article = $shopifyArticleCreateInputInputObject;

        return $this;
    }

    /**
     * The properties of the new blog.
     */
    public function setBlog(ShopifyArticleBlogInputInputObject $shopifyArticleBlogInputInputObject): static
    {
        $this->blog = $shopifyArticleBlogInputInputObject;

        return $this;
    }
}
