<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to update a page.
 */
class ShopifyPageUpdateInputInputObject extends InputObject
{
    protected $handle;
    protected $body;
    protected $isPublished;
    protected $publishDate;
    protected $templateSuffix;
    protected $metafields;
    protected $title;
    protected $redirectNewHandle;

    /**
     * A unique, human-friendly string for the page. If no handle is specified, a handle will be generated automatically from the page title.
     * In themes, the Liquid templating language refers to a page by its handle.
     */
    public function setHandle($handle): static
    {
        $this->handle = $handle;

        return $this;
    }

    /**
     * The text content of the page, complete with HTML markup.
     */
    public function setBody($body): static
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Whether or not the page should be visible. Defaults to `true` if no publish date is specified.
     */
    public function setIsPublished($isPublished): static
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    /**
     * The date and time (ISO 8601 format) when the page should become visible.
     */
    public function setPublishDate($publishDate): static
    {
        $this->publishDate = $publishDate;

        return $this;
    }

    /**
     * The suffix of the template that's used to render the page.
     * If the value is an empty string or `null`, then the default page template is used.
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
     * The title of the page.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

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
