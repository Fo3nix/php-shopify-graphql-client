<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyAttribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCustomer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCustomerPaymentMethod;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionDeliveryMethodHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionManualDiscountConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionLineConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyOrderConnection;
use Carbon\Carbon;

/**
 * Represents subscription contract common fields.
 */
interface ShopifySubscriptionContractBase
{
    
    /**
     * The subscription app that the subscription contract is registered to.
     *
     * @return ShopifyApp
     */
    public function getApp(): ?ShopifyApp;

    
    /**
     * The URL of the subscription contract page on the subscription app.
     *
     * @return string
     */
    public function getAppAdminUrl(): mixed;

    
    /**
     * The currency that's used for the subscription contract.
     *
     * @return string A ShopifyCurrencyCodeEnumObject value
     */
    public function getCurrencyCode(): ?string;

    
    /**
     * A list of the custom attributes to be added to the generated orders.
     *
     * @return ShopifyAttribute[]
     */
    public function getCustomAttributes(): ?array;

    
    /**
     * The customer to whom the subscription contract belongs.
     *
     * @return ShopifyCustomer
     */
    public function getCustomer(): ?ShopifyCustomer;

    
    /**
     * The customer payment method that's used for the subscription contract.
     *
     * @return ShopifyCustomerPaymentMethod
     */
    public function getCustomerPaymentMethod(): ?ShopifyCustomerPaymentMethod;

    
    /**
     * The delivery method for each billing of the subscription contract.
     *
     * @return ShopifySubscriptionDeliveryMethodLocalDelivery|ShopifySubscriptionDeliveryMethodPickup|ShopifySubscriptionDeliveryMethodShipping
     */
    public function getDeliveryMethod(): ShopifySubscriptionDeliveryMethodLocalDelivery|ShopifySubscriptionDeliveryMethodPickup|ShopifySubscriptionDeliveryMethodShipping|null;

    
    /**
     * The delivery price for each billing of the subscription contract.
     *
     * @return ShopifyMoneyV2
     */
    public function getDeliveryPrice(): ?ShopifyMoneyV2;

    
    /**
     * The list of subscription discounts associated with the subscription contract.
     *
     * @return ShopifySubscriptionManualDiscountConnection
     */
    public function getDiscounts(): ?ShopifySubscriptionManualDiscountConnection;

    
    /**
     * The number of lines associated with the subscription contract.
     *
     * @return int
     */
    public function getLineCount(): ?int;

    
    /**
     * The list of subscription lines associated with the subscription contract.
     *
     * @return ShopifySubscriptionLineConnection
     */
    public function getLines(): ?ShopifySubscriptionLineConnection;

    
    /**
     * The number of lines associated with the subscription contract.
     *
     * @return ShopifyCount
     */
    public function getLinesCount(): ?ShopifyCount;

    
    /**
     * The note field that will be applied to the generated orders.
     *
     * @return string
     */
    public function getNote(): ?string;

    
    /**
     * A list of the subscription contract's orders.
     *
     * @return ShopifyOrderConnection
     */
    public function getOrders(): ?ShopifyOrderConnection;

    
    /**
     * The date and time when the subscription contract was updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon;

    /**
     * Converts this object to an array.
     * @return array
     */
    public function asArray(): array;
}
