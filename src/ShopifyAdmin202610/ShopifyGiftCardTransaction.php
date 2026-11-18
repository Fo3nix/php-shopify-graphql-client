<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyGiftCard;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldConnection;
use Carbon\Carbon;

/**
 * Interface for a gift card transaction.
 */
interface ShopifyGiftCardTransaction extends ShopifyHasMetafields
{
    
    /**
     * The amount of the transaction.
     *
     * @return ShopifyMoneyV2
     */
    public function getAmount(): ?ShopifyMoneyV2;

    
    /**
     * The gift card that the transaction belongs to.
     *
     * @return ShopifyGiftCard
     */
    public function getGiftCard(): ?ShopifyGiftCard;

    
    /**
     * The unique ID for the transaction.
     *
     * @return string
     */
    public function getId(): ?string;

    
    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     *
     * @return ShopifyMetafield
     */
    public function getMetafield(): ?ShopifyMetafield;

    
    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     *
     * @return ShopifyMetafieldConnection
     */
    public function getMetafields(): ?ShopifyMetafieldConnection;

    
    /**
     * A note about the transaction.
     *
     * @return string
     */
    public function getNote(): ?string;

    
    /**
     * The date and time when the transaction was processed.
     *
     * @return Carbon
     */
    public function getProcessedAt(): ?Carbon;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
