<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to create a collection.
 */
class ShopifyCollectionCreateInputInputObject extends InputObject
{
    const REQUIRED = ["title"];

    protected $descriptionHtml;
    protected $handle;
    protected $image;
    protected $templateSuffix;
    protected $sortOrder;
    protected $title;
    protected $metafields;
    protected $seo;
    protected $sources;

    /**
     * The description of the collection, in HTML format.
     */
    public function setDescriptionHtml($descriptionHtml): static
    {
        $this->descriptionHtml = $descriptionHtml;

        return $this;
    }

    /**
     * A unique human-friendly string for the collection. Automatically generated from the collection's title.
     */
    public function setHandle($handle): static
    {
        $this->handle = $handle;

        return $this;
    }

    /**
     * The image associated with the collection.
     */
    public function setImage(ShopifyImageInputInputObject $shopifyImageInputInputObject): static
    {
        $this->image = $shopifyImageInputInputObject;

        return $this;
    }

    /**
     * The theme template used when viewing the collection in a store.
     */
    public function setTemplateSuffix($templateSuffix): static
    {
        $this->templateSuffix = $templateSuffix;

        return $this;
    }

    /**
     * The order in which the collection's products are sorted.
     */
    public function setSortOrder($shopifyCollectionSortOrder): static
    {
        $this->sortOrder = new RawObject($shopifyCollectionSortOrder);

        return $this;
    }

    /**
     * The title of the collection.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The metafields to associate with the collection.
     */
    public function setMetafields(array $metafields): static
    {
        $this->metafields = $metafields;

        return $this;
    }

    /**
     * SEO information for the collection.
     */
    public function setSeo(ShopifySEOInputInputObject $shopifySEOInputInputObject): static
    {
        $this->seo = $shopifySEOInputInputObject;

        return $this;
    }

    /**
     * The sources to create for the collection.
     */
    public function setSources(array $sources): static
    {
        $this->sources = $sources;

        return $this;
    }
}
