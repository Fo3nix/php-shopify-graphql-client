<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for specifying a gift card product variant to create or update with the
 * [`giftCardProductSet`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/giftCardProductSet)
 * mutation.
 *
 * Include an
 * [`id`](https://shopify.dev/docs/api/admin-graphql/latest/input-objects/GiftCardProductSetVariantInput#field-GiftCardProductSetVariantInput.fields.id)
 * to update an existing variant, or omit it to create a new one. Gift card variant defaults are
 * applied automatically, meaning variants are set to non-taxable, don't require shipping, and their inventory is untracked.
 */
class ShopifyGiftCardProductVariantSetInputInputObject extends InputObject
{
    const REQUIRED = ["optionValues"];

    protected $id;
    protected $optionValues;
    protected $price;
    protected $sku;
    protected $barcode;
    protected $position;
    protected $file;
    protected $metafields;
    protected $published;

    /**
     * Specifies the product variant to update or create a new variant if absent.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The custom properties that a shop owner uses to define product variants.
     */
    public function setOptionValues(array $optionValues): static
    {
        $this->optionValues = $optionValues;

        return $this;
    }

    /**
     * The price of the variant.
     */
    public function setPrice($price): static
    {
        $this->price = $price;

        return $this;
    }

    /**
     * The SKU for the variant. Case-sensitive string.
     */
    public function setSku($sku): static
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * The value of the barcode associated with the product.
     */
    public function setBarcode($barcode): static
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * The order of the product variant in the list of product variants. The first position in the list is 1.
     */
    public function setPosition($position): static
    {
        $this->position = $position;

        return $this;
    }

    /**
     * The file to associate with the variant.
     *
     * Complexity cost: 0.6 per variant file.
     *
     * Any file specified here must also be specified in the `files` input for the product.
     */
    public function setFile(ShopifyFileSetInputInputObject $shopifyFileSetInputInputObject): static
    {
        $this->file = $shopifyFileSetInputInputObject;

        return $this;
    }

    /**
     * Additional customizable information about the product variant.
     *
     * Complexity cost: 0.4 per variant metafield.
     */
    public function setMetafields(array $metafields): static
    {
        $this->metafields = $metafields;

        return $this;
    }

    /**
     * Indicates whether the product variant is created as published or unpublished. This option is only available for new product variants.
     */
    public function setPublished($published): static
    {
        $this->published = $published;

        return $this;
    }
}
