<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for creating or updating a gift card product with the
 * [`giftCardProductSet`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/giftCardProductSet)
 * mutation.
 *
 * For list fields like
 * [`variants`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/giftCardProductSet#arguments-input.fields.variants),
 * the mutation creates new entries, updates existing ones, and deletes any entries not included
 * in the input. All other fields update only when explicitly provided, leaving omitted fields
 * unchanged.
 */
class ShopifyGiftCardProductSetInputInputObject extends InputObject
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
    protected $redirectNewHandle;
    protected $status;
    protected $collections;
    protected $metafields;
    protected $files;
    protected $productOptions;
    protected $issuanceCurrency;
    protected $crossCurrencyRedeemable;
    protected $variants;

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
     * Whether a redirect is required after a new handle has been provided.
     * If `true`, then the old handle is redirected to the new one automatically.
     */
    public function setRedirectNewHandle($redirectNewHandle): static
    {
        $this->redirectNewHandle = $redirectNewHandle;

        return $this;
    }

    /**
     * The status of the product.
     */
    public function setStatus($shopifyProductStatus): static
    {
        $this->status = new RawObject($shopifyProductStatus);

        return $this;
    }

    /**
     * The IDs of collections that this product will be a member of.
     */
    public function setCollections(array $collections): static
    {
        $this->collections = $collections;

        return $this;
    }

    /**
     * The metafields to associate with this product.
     *
     * Complexity cost: 0.4 per metafield.
     */
    public function setMetafields(array $metafields): static
    {
        $this->metafields = $metafields;

        return $this;
    }

    /**
     * The files to associate with the product.
     *
     * Complexity cost: 1.9 per file.
     */
    public function setFiles(array $files): static
    {
        $this->files = $files;

        return $this;
    }

    /**
     * List of custom product options and option values (maximum of 3 per product).
     */
    public function setProductOptions(array $productOptions): static
    {
        $this->productOptions = $productOptions;

        return $this;
    }

    /**
     * The issuance currency for gift cards fulfilled from this product.
     *
     * > Note
     * > This value can't be changed after the product is created.
     */
    public function setIssuanceCurrency($shopifyCurrencyCode): static
    {
        $this->issuanceCurrency = new RawObject($shopifyCurrencyCode);

        return $this;
    }

    /**
     * Whether gift cards fulfilled from this product are redeemable in any payment currency supported by the store.
     *
     * > Note
     * > This value can't be changed after the product is created.
     */
    public function setCrossCurrencyRedeemable($crossCurrencyRedeemable): static
    {
        $this->crossCurrencyRedeemable = $crossCurrencyRedeemable;

        return $this;
    }

    /**
     * A list of variants associated with the gift card product.
     *
     * Complexity cost: 0.2 per variant.
     */
    public function setVariants(array $variants): static
    {
        $this->variants = $variants;

        return $this;
    }
}
