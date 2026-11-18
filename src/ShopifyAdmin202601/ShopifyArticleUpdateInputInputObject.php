<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to update an article.
 */
class ShopifyArticleUpdateInputInputObject extends InputObject
{
    protected $blogId;
    protected $handle;
    protected $body;
    protected $summary;
    protected $isPublished;
    protected $publishDate;
    protected $templateSuffix;
    protected $metafields;
    protected $tags;
    protected $image;
    protected $title;
    protected $author;
    protected $redirectNewHandle;

    /**
     * The ID of the blog containing the article.
     */
    public function setBlogId($blogId): static
    {
        $this->blogId = $blogId;

        return $this;
    }

    /**
     * A unique, human-friendly string for the article that's automatically generated from the article's title.
     * The handle is used in the article's URL.
     */
    public function setHandle($handle): static
    {
        $this->handle = $handle;

        return $this;
    }

    /**
     * The text of the article's body, complete with HTML markup.
     */
    public function setBody($body): static
    {
        $this->body = $body;

        return $this;
    }

    /**
     * A summary of the article, which can include HTML markup.
     * The summary is used by the online store theme to display the article on other pages, such as the home page or the main blog page.
     */
    public function setSummary($summary): static
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Whether or not the article should be visible.
     */
    public function setIsPublished($isPublished): static
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    /**
     * The date and time (ISO 8601 format) when the article should become visible.
     */
    public function setPublishDate($publishDate): static
    {
        $this->publishDate = $publishDate;

        return $this;
    }

    /**
     * The suffix of the template that's used to render the page.
     * If the value is an empty string or `null`, then the default article template is used.
     */
    public function setTemplateSuffix($templateSuffix): static
    {
        $this->templateSuffix = $templateSuffix;

        return $this;
    }

    /**
     * The input fields to create or update a metafield.
     */
    public function setMetafields(array $metafields): static
    {
        $this->metafields = $metafields;

        return $this;
    }

    /**
     * A comma-separated list of tags.
     * Tags are additional short descriptors formatted as a string of comma-separated values.
     */
    public function setTags(array $tags): static
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * The image associated with the article.
     */
    public function setImage(ShopifyArticleImageInputInputObject $shopifyArticleImageInputInputObject): static
    {
        $this->image = $shopifyArticleImageInputInputObject;

        return $this;
    }

    /**
     * The title of the article.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The name of the author of the article.
     */
    public function setAuthor(ShopifyAuthorInputInputObject $shopifyAuthorInputInputObject): static
    {
        $this->author = $shopifyAuthorInputInputObject;

        return $this;
    }

    /**
     * Whether a redirect is required after a new handle has been provided.
     * If `true`, then the old handle is redirected to the new one automatically.
     */
    public function setRedirectNewHandle($redirectNewHandle): static
    {
        $this->redirectNewHandle = $redirectNewHandle;

        return $this;
    }
}
