<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a line item to create for an order.
 */
class ShopifyOrderCreateLineItemInputInputObject extends InputObject
{
    const REQUIRED = ["quantity"];

    protected $fulfillmentService;
    protected $giftCard;
    protected $priceSet;
    protected $productId;
    protected $properties;
    protected $quantity;
    protected $requiresShipping;
    protected $sku;
    protected $taxLines;
    protected $taxable;
    protected $title;
    protected $variantId;
    protected $variantTitle;
    protected $vendor;
    protected $weight;

    /**
     * The handle of a fulfillment service that stocks the product variant belonging to a line item.
     *
     *               This is a third-party fulfillment service in the following scenarios:
     *
     *               **Scenario 1**
     *               - The product variant is stocked by a single fulfillment service.
     *               - The [FulfillmentService](/api/admin-graphql/latest/objects/FulfillmentService) is a third-party fulfillment service. Third-party fulfillment services don't have a handle with the value `manual`.
     *
     *               **Scenario 2**
     *               - Multiple fulfillment services stock the product variant.
     *               - The last time that the line item was unfulfilled, it was awaiting fulfillment by a third-party fulfillment service. Third-party fulfillment services don't have a handle with the value `manual`.
     *
     *               If none of the above conditions are met, then the fulfillment service has the `manual` handle.
     */
    public function setFulfillmentService($fulfillmentService): static
    {
        $this->fulfillmentService = $fulfillmentService;

        return $this;
    }

    /**
     * Whether the item is a gift card. If true, then the item is not taxed or considered for shipping charges.
     */
    public function setGiftCard($giftCard): static
    {
        $this->giftCard = $giftCard;

        return $this;
    }

    /**
     * The price of the item before discounts have been applied in the shop currency.
     */
    public function setPriceSet(ShopifyMoneyBagInputInputObject $shopifyMoneyBagInputInputObject): static
    {
        $this->priceSet = $shopifyMoneyBagInputInputObject;

        return $this;
    }

    /**
     * The ID of the product that the line item belongs to. Can be `null` if the original product associated with the order is deleted at a later date.
     */
    public function setProductId($productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * An array of custom information for the item that has been added to the cart. Often used to provide product customization options.
     */
    public function setProperties(array $properties): static
    {
        $this->properties = $properties;

        return $this;
    }

    /**
     * The number of items that were purchased.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Whether the item requires shipping.
     */
    public function setRequiresShipping($requiresShipping): static
    {
        $this->requiresShipping = $requiresShipping;

        return $this;
    }

    /**
     * The item's SKU (stock keeping unit).
     */
    public function setSku($sku): static
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * A list of tax line objects, each of which details a tax applied to the item.
     */
    public function setTaxLines(array $taxLines): static
    {
        $this->taxLines = $taxLines;

        return $this;
    }

    /**
     * Whether the item was taxable.
     */
    public function setTaxable($taxable): static
    {
        $this->taxable = $taxable;

        return $this;
    }

    /**
     * The title of the product.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The ID of the product variant. If both `productId` and `variantId` are provided, then the product ID that corresponds to the `variantId` is used.
     */
    public function setVariantId($variantId): static
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * The title of the product variant.
     */
    public function setVariantTitle($variantTitle): static
    {
        $this->variantTitle = $variantTitle;

        return $this;
    }

    /**
     * The name of the item's supplier.
     */
    public function setVendor($vendor): static
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * The weight of the line item. This will take precedence over the weight of the product variant, if one was specified.
     */
    public function setWeight(ShopifyWeightInputInputObject $shopifyWeightInputInputObject): static
    {
        $this->weight = $shopifyWeightInputInputObject;

        return $this;
    }
}
