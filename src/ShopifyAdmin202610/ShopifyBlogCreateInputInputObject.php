<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields to create a blog.
 */
class ShopifyBlogCreateInputInputObject extends InputObject
{
    const REQUIRED = ["title"];

    protected $handle;
    protected $templateSuffix;
    protected $metafields;
    protected $commentPolicy;
    protected $title;

    /**
     * A unique, human-friendly string for the blog. If no handle is specified, a handle will be generated automatically from the blog title.
     * The handle is customizable and is used by the Liquid templating language to refer to the blog.
     */
    public function setHandle($handle): static
    {
        $this->handle = $handle;

        return $this;
    }

    /**
     * The name of the template a blog is using if it's using an alternate template.
     * Returns `null` if a blog is using the default blog.liquid template.
     */
    public function setTemplateSuffix($templateSuffix): static
    {
        $this->templateSuffix = $templateSuffix;

        return $this;
    }

    /**
     * Attaches additional metadata to a store's resources.
     */
    public function setMetafields(array $metafields): static
    {
        $this->metafields = $metafields;

        return $this;
    }

    /**
     * Indicates whether readers can post comments to the blog and whether comments are moderated.
     */
    public function setCommentPolicy($shopifyCommentPolicy): static
    {
        $this->commentPolicy = new RawObject($shopifyCommentPolicy);

        return $this;
    }

    /**
     * The title of the blog.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }
}
