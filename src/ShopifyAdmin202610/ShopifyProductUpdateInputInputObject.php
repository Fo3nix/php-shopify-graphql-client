<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for updating a product.
 */
class ShopifyProductUpdateInputInputObject extends InputObject
{
    protected $descriptionHtml;
    protected $handle;
    protected $seo;
    protected $productType;
    protected $tags;
    protected $templateSuffix;
    protected $giftCardTemplateSuffix;
    protected $title;
    protected $vendor;
    protected $category;
    protected $redirectNewHandle;
    protected $id;
    protected $collectionsToJoin;
    protected $collectionsToLeave;
    protected $deleteConflictingConstrainedMetafields;
    protected $metafields;
    protected $status;
    protected $requiresSellingPlan;

    /**
     * The description of the product, with HTML tags.
     * For example, the description might include bold `<strong></strong>` and italic `<i></i>` text.
     */
    public function setDescriptionHtml($descriptionHtml): static
    {
        $this->descriptionHtml = $descriptionHtml;

        return $this;
    }

    /**
     * A unique, human-readable string that's used to identify the product in URLs. A handle can contain letters, hyphens (`-`), and numbers, but no spaces.
     * If no handle is explicitly provided, then the title is used to construct the product's handle.
     * For example, if a product is titled "Black Sunglasses" and no handle is provided, then the handle `black-sunglasses` is generated (unless that handle
     * is already taken, in which case a suffix is added to make the handle unique).
     */
    public function setHandle($handle): static
    {
        $this->handle = $handle;

        return $this;
    }

    /**
     * The [SEO title and description](https://help.shopify.com/manual/promoting-marketing/seo/adding-keywords)
     * that are associated with a product.
     */
    public function setSeo(ShopifySEOInputInputObject $shopifySEOInputInputObject): static
    {
        $this->seo = $shopifySEOInputInputObject;

        return $this;
    }

    /**
     * The [product type](https://help.shopify.com/manual/products/details/product-type)
     * that merchants define.
     */
    public function setProductType($productType): static
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * A list of searchable keywords that are
     * associated with the product. For example, a merchant might apply the `sports`
     * and `summer` tags to products that are associated with sportwear for summer.
     *
     * Updating `tags` overwrites any existing tags that were previously added to the product.
     * To add new tags without overwriting existing tags, use the
     * [`tagsAdd`](https://shopify.dev/api/admin-graphql/latest/mutations/tagsadd)
     * mutation.
     */
    public function setTags(array $tags): static
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * The [theme template](https://shopify.dev/docs/storefronts/themes/architecture/templates) that's used when customers view a product in a store.
     */
    public function setTemplateSuffix($templateSuffix): static
    {
        $this->templateSuffix = $templateSuffix;

        return $this;
    }

    /**
     * The [theme template](https://shopify.dev/docs/storefronts/themes/architecture/templates) that's used when customers view a gift card in a store.
     */
    public function setGiftCardTemplateSuffix($giftCardTemplateSuffix): static
    {
        $this->giftCardTemplateSuffix = $giftCardTemplateSuffix;

        return $this;
    }

    /**
     * The name for the product that displays to customers. If no handle is explicitly provided, then the title is used to construct the product's handle.
     * For example, if a product is titled "Black Sunglasses" and no handle is provided, then the handle `black-sunglasses` is generated.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The name of the product's vendor.
     */
    public function setVendor($vendor): static
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * The ID of the [category](https://shopify.github.io/product-taxonomy/releases/unstable/?categoryId=sg-4-17-2-17)
     * that's associated with the product.
     */
    public function setCategory($category): static
    {
        $this->category = $category;

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

    /**
     * The product's ID.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * A list of collection IDs to associate with the product.
     */
    public function setCollectionsToJoin(array $collectionsToJoin): static
    {
        $this->collectionsToJoin = $collectionsToJoin;

        return $this;
    }

    /**
     * The collection IDs to disassociate from the product.
     */
    public function setCollectionsToLeave(array $collectionsToLeave): static
    {
        $this->collectionsToLeave = $collectionsToLeave;

        return $this;
    }

    /**
     * Whether to delete metafields whose constraints don't match the product's category.
     * Can only be used when updating the product's category.
     */
    public function setDeleteConflictingConstrainedMetafields($deleteConflictingConstrainedMetafields): static
    {
        $this->deleteConflictingConstrainedMetafields = $deleteConflictingConstrainedMetafields;

        return $this;
    }

    /**
     * The [custom fields](https://shopify.dev/docs/apps/build/custom-data) to associate with the product
     * for the purposes of adding and storing additional information.
     */
    public function setMetafields(array $metafields): static
    {
        $this->metafields = $metafields;

        return $this;
    }

    /**
     * The [product status](https://help.shopify.com/manual/products/details/product-details-page#product-status),
     * which controls visibility across all sales channels.
     */
    public function setStatus($shopifyProductStatus): static
    {
        $this->status = new RawObject($shopifyProductStatus);

        return $this;
    }

    /**
     * Whether the product can only be purchased with
     * a [selling plan](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/selling-plans).
     * Products that are sold on subscription (`requiresSellingPlan: true`) can be updated only for online stores.
     * If you update a product to be subscription-only (`requiresSellingPlan: true`), then the product is unpublished from all channels except the online store.
     */
    public function setRequiresSellingPlan($requiresSellingPlan): static
    {
        $this->requiresSellingPlan = $requiresSellingPlan;

        return $this;
    }
}
