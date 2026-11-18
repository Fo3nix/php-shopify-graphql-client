<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationArticleUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "article"];

    protected $id;
    protected $article;
    protected $blog;

    /**
     * The ID of the article to be updated.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The properties of the article to be updated.
     */
    public function setArticle(ShopifyArticleUpdateInputInputObject $shopifyArticleUpdateInputInputObject): static
    {
        $this->article = $shopifyArticleUpdateInputInputObject;

        return $this;
    }

    /**
     * The properties of the blog to be created.
     */
    public function setBlog(ShopifyArticleBlogInputInputObject $shopifyArticleBlogInputInputObject): static
    {
        $this->blog = $shopifyArticleBlogInputInputObject;

        return $this;
    }
}
