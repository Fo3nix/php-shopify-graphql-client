<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to create a collection.
 */
class ShopifyCollectionInputInputObject extends InputObject
{
    protected $descriptionHtml;
    protected $handle;
    protected $id;
    protected $image;
    protected $products;
    protected $ruleSet;
    protected $templateSuffix;
    protected $sortOrder;
    protected $title;
    protected $metafields;
    protected $seo;
    protected $redirectNewHandle;

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
     * Specifies the collection to update or create a new collection if absent. Required for updating a collection.
     */
    public function setId($id): static
    {
        $this->id = $id;

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
     * Initial list of collection products. Only valid with `collectionCreate`.
     */
    public function setProducts(array $products): static
    {
        $this->products = $products;

        return $this;
    }

    /**
     * The rules used to assign products to the collection. This is the legacy smart-collection model;
     * use `sources` with `conditions` instead. Each `ruleSet` rule has an equivalent `condition`.
     */
    public function setRuleSet(ShopifyCollectionRuleSetInputInputObject $shopifyCollectionRuleSetInputInputObject): static
    {
        $this->ruleSet = $shopifyCollectionRuleSetInputInputObject;

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
     * The title of the collection. Required for creating a new collection.
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
     * Indicates whether a redirect is required after a new handle has been provided.
     * If true, then the old handle is redirected to the new one automatically.
     */
    public function setRedirectNewHandle($redirectNewHandle): static
    {
        $this->redirectNewHandle = $redirectNewHandle;

        return $this;
    }
}
