<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDraftOrderAppliedDiscount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMailingAddress;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyAttribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCustomer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyEventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDraftOrderLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyLocalizationExtensionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyLocalizedFieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPaymentTerms;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDraftOrderPlatformDiscount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPurchasingEntityHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShippingLine;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyTaxLine;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDraftOrderWarningHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDraftOrderWarning;

/**
 * An order that a merchant creates on behalf of a customer. Draft orders are useful for merchants that need to do the following tasks:
 *
 * - Create new orders for sales made by phone, in person, by chat, or elsewhere. When a merchant accepts payment for a draft order, an order is created.
 * - Send invoices to customers to pay with a secure checkout link.
 * - Use custom items to represent additional costs or products that aren't displayed in a shop's inventory.
 * - Re-create orders manually from active sales channels.
 * - Sell products at discount or wholesale rates.
 * - Take pre-orders.
 *
 * For draft orders in multiple currencies `presentment_money` is the source of truth for what a customer is going to be charged and `shop_money` is an estimate of what the merchant might receive in their shop currency.
 *
 * **Caution:** Only use this data if it's required for your app's functionality. Shopify will restrict [access to scopes](https://shopify.dev/api/usage/access-scopes) for apps that don't have a legitimate use for the associated data.
 *
 * Draft orders created on or after April 1, 2025 will be automatically purged after one year of inactivity.
 */
class ShopifyDraftOrder implements ShopifyCommentEventSubject, ShopifyHasEvents, ShopifyHasLocalizationExtensions, ShopifyHasLocalizedFields, ShopifyHasMetafields, ShopifyLegacyInteroperability, ShopifyNavigable, ShopifyNode
{
    protected $acceptAutomaticDiscounts;
    protected $allVariantPricesOverridden;
    protected $allowDiscountCodesInCheckout;
    protected $anyVariantPricesOverridden;
    protected $appliedDiscount;
    protected $billingAddress;
    protected $billingAddressMatchesShippingAddress;
    protected $completedAt;
    protected $createdAt;
    protected $currencyCode;
    protected $customAttributes;
    protected $customer;
    protected $defaultCursor;
    protected $discountCodes;
    protected $email;
    protected $events;
    protected $hasTimelineComment;
    protected $id;
    protected $invoiceEmailTemplateSubject;
    protected $invoiceSentAt;
    protected $invoiceUrl;
    protected $legacyResourceId;
    protected $lineItems;
    protected $lineItemsSubtotalPrice;
    protected $localizationExtensions;
    protected $localizedFields;
    protected $marketName;
    protected $marketRegionCountryCode;
    protected $metafield;
    protected $metafields;
    protected $name;
    protected $note2;
    protected $order;
    protected $paymentTerms;
    protected $phone;
    protected $platformDiscounts;
    protected $poNumber;
    protected $presentmentCurrencyCode;
    protected $purchasingEntity;
    protected $ready;
    protected $reserveInventoryUntil;
    protected $shippingAddress;
    protected $shippingLine;
    protected $status;
    protected $subtotalPrice;
    protected $subtotalPriceSet;
    protected $tags;
    protected $taxExempt;
    protected $taxLines;
    protected $taxesIncluded;
    protected $totalDiscountsSet;
    protected $totalLineItemsPriceSet;
    protected $totalPrice;
    protected $totalPriceSet;
    protected $totalQuantityOfLineItems;
    protected $totalShippingPrice;
    protected $totalShippingPriceSet;
    protected $totalTax;
    protected $totalTaxSet;
    protected $totalWeight;
    protected $transformerFingerprint;
    protected $updatedAt;
    protected $visibleToCustomer;
    protected $warnings;

    
    /**
     * Whether or not to accept automatic discounts on the draft order during calculation.
     * If false, only discount codes and custom draft order discounts (see `appliedDiscount`) will be applied.
     * If true, eligible automatic discounts will be applied in addition to discount codes and custom draft order discounts.
     *
     * @return bool
     */
    public function getAcceptAutomaticDiscounts(): ?bool
    {
        return $this->acceptAutomaticDiscounts;
    }

    
    /**
     * Whether all variant prices have been overridden.
     *
     * @return bool
     */
    public function getAllVariantPricesOverridden(): ?bool
    {
        return $this->allVariantPricesOverridden;
    }

    
    /**
     * Whether discount codes are allowed during checkout of this draft order.
     *
     * @return bool
     */
    public function getAllowDiscountCodesInCheckout(): ?bool
    {
        return $this->allowDiscountCodesInCheckout;
    }

    
    /**
     * Whether any variant prices have been overridden.
     *
     * @return bool
     */
    public function getAnyVariantPricesOverridden(): ?bool
    {
        return $this->anyVariantPricesOverridden;
    }

    
    /**
     * The custom order-level discount applied.
     *
     * @return ShopifyDraftOrderAppliedDiscount
     */
    public function getAppliedDiscount(): ?ShopifyDraftOrderAppliedDiscount
    {
        return $this->appliedDiscount;
    }

    
    /**
     * The billing address of the customer.
     *
     * @return ShopifyMailingAddress
     */
    public function getBillingAddress(): ?ShopifyMailingAddress
    {
        return $this->billingAddress;
    }

    
    /**
     * Whether the billing address matches the shipping address.
     *
     * @return bool
     */
    public function getBillingAddressMatchesShippingAddress(): ?bool
    {
        return $this->billingAddressMatchesShippingAddress;
    }

    
    /**
     * The date and time when the draft order was converted to a new order,
     * and had it's status changed to **Completed**.
     *
     * @return Carbon
     */
    public function getCompletedAt(): ?Carbon
    {
        return $this->completedAt;
    }

    
    /**
     * The date and time when the draft order was created in Shopify.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The shop currency used for calculation.
     *
     * @return string A ShopifyCurrencyCodeEnumObject value
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    
    /**
     * The custom information added to the draft order on behalf of the customer.
     *
     * @return ShopifyAttribute[]
     */
    public function getCustomAttributes(): ?array
    {
        return $this->customAttributes;
    }

    
    /**
     * The customer who will be sent an invoice.
     *
     * @return ShopifyCustomer
     */
    public function getCustomer(): ?ShopifyCustomer
    {
        return $this->customer;
    }

    
    /**
     * A default [cursor](https://shopify.dev/api/usage/pagination-graphql) that returns the single next record, sorted ascending by ID.
     *
     * @return string
     */
    public function getDefaultCursor(): ?string
    {
        return $this->defaultCursor;
    }

    
    /**
     * All discount codes applied.
     *
     * @return string[]
     */
    public function getDiscountCodes(): ?array
    {
        return $this->discountCodes;
    }

    
    /**
     * The email address of the customer, which is used to send notifications.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    
    /**
     * The list of events associated with the draft order.
     *
     * @return ShopifyEventConnection
     */
    public function getEvents(): ?ShopifyEventConnection
    {
        return $this->events;
    }

    
    /**
     * Whether the merchant has added timeline comments to the draft order.
     *
     * @return bool
     */
    public function getHasTimelineComment(): ?bool
    {
        return $this->hasTimelineComment;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The subject defined for the draft invoice email template.
     *
     * @return string
     */
    public function getInvoiceEmailTemplateSubject(): ?string
    {
        return $this->invoiceEmailTemplateSubject;
    }

    
    /**
     * The date and time when the invoice was last emailed to the customer.
     *
     * @return Carbon
     */
    public function getInvoiceSentAt(): ?Carbon
    {
        return $this->invoiceSentAt;
    }

    
    /**
     * The link to the checkout, which is sent to the customer in the invoice email.
     *
     * @return string
     */
    public function getInvoiceUrl(): mixed
    {
        return $this->invoiceUrl;
    }

    
    /**
     * The ID of the corresponding resource in the REST Admin API.
     *
     * @return string
     */
    public function getLegacyResourceId(): mixed
    {
        return $this->legacyResourceId;
    }

    
    /**
     * The list of the line items in the draft order.
     *
     * @return ShopifyDraftOrderLineItemConnection
     */
    public function getLineItems(): ?ShopifyDraftOrderLineItemConnection
    {
        return $this->lineItems;
    }

    
    /**
     * A subtotal of the line items and corresponding discounts,
     * excluding shipping charges, shipping discounts, taxes, or order discounts.
     *
     * @return ShopifyMoneyBag
     */
    public function getLineItemsSubtotalPrice(): ?ShopifyMoneyBag
    {
        return $this->lineItemsSubtotalPrice;
    }

    
    /**
     * List of localization extensions for the resource.
     *
     * @return ShopifyLocalizationExtensionConnection
     */
    public function getLocalizationExtensions(): ?ShopifyLocalizationExtensionConnection
    {
        return $this->localizationExtensions;
    }

    
    /**
     * List of localized fields for the resource.
     *
     * @return ShopifyLocalizedFieldConnection
     */
    public function getLocalizedFields(): ?ShopifyLocalizedFieldConnection
    {
        return $this->localizedFields;
    }

    
    /**
     * The name of the selected market.
     *
     * @return string
     */
    public function getMarketName(): ?string
    {
        return $this->marketName;
    }

    
    /**
     * The selected country code that determines the pricing.
     *
     * @return string A ShopifyCountryCodeEnumObject value
     */
    public function getMarketRegionCountryCode(): ?string
    {
        return $this->marketRegionCountryCode;
    }

    
    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     *
     * @return ShopifyMetafield
     */
    public function getMetafield(): ?ShopifyMetafield
    {
        return $this->metafield;
    }

    
    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     *
     * @return ShopifyMetafieldConnection
     */
    public function getMetafields(): ?ShopifyMetafieldConnection
    {
        return $this->metafields;
    }

    
    /**
     * The identifier for the draft order, which is unique within the store. For example, _#D1223_.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The text from an optional note attached to the draft order.
     *
     * @return string
     */
    public function getNote2(): ?string
    {
        return $this->note2;
    }

    
    /**
     * The order that was created from the draft order.
     *
     * @return ShopifyOrder
     */
    public function getOrder(): ?ShopifyOrder
    {
        return $this->order;
    }

    
    /**
     * The associated payment terms for this draft order.
     *
     * @return ShopifyPaymentTerms
     */
    public function getPaymentTerms(): ?ShopifyPaymentTerms
    {
        return $this->paymentTerms;
    }

    
    /**
     * The assigned phone number.
     *
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    
    /**
     * The list of platform discounts applied.
     *
     * @return ShopifyDraftOrderPlatformDiscount[]
     */
    public function getPlatformDiscounts(): ?array
    {
        return $this->platformDiscounts;
    }

    
    /**
     * The purchase order number.
     *
     * @return string
     */
    public function getPoNumber(): ?string
    {
        return $this->poNumber;
    }

    
    /**
     * The payment currency used for calculation.
     *
     * @return string A ShopifyCurrencyCodeEnumObject value
     */
    public function getPresentmentCurrencyCode(): ?string
    {
        return $this->presentmentCurrencyCode;
    }

    
    /**
     * The purchasing entity.
     *
     * @return ShopifyCustomer|ShopifyPurchasingCompany
     */
    public function getPurchasingEntity(): ShopifyCustomer|ShopifyPurchasingCompany|null
    {
        return $this->purchasingEntity;
    }

    
    /**
     * Whether the draft order is ready and can be completed.
     * Draft orders might have asynchronous operations that can take time to finish.
     *
     * @return bool
     */
    public function getReady(): ?bool
    {
        return $this->ready;
    }

    
    /**
     * The time after which inventory will automatically be restocked.
     *
     * @return Carbon
     */
    public function getReserveInventoryUntil(): ?Carbon
    {
        return $this->reserveInventoryUntil;
    }

    
    /**
     * The shipping address of the customer.
     *
     * @return ShopifyMailingAddress
     */
    public function getShippingAddress(): ?ShopifyMailingAddress
    {
        return $this->shippingAddress;
    }

    
    /**
     * The line item containing the shipping information and costs.
     *
     * @return ShopifyShippingLine
     */
    public function getShippingLine(): ?ShopifyShippingLine
    {
        return $this->shippingLine;
    }

    
    /**
     * The status of the draft order.
     *
     * @return string A ShopifyDraftOrderStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * The subtotal, in shop currency, of the line items and their discounts, excluding shipping charges, shipping discounts, and taxes.
     *
     * @return string
     */
    public function getSubtotalPrice(): mixed
    {
        return $this->subtotalPrice;
    }

    
    /**
     * The subtotal, of the line items and their discounts, excluding shipping charges, shipping discounts, and taxes.
     *
     * @return ShopifyMoneyBag
     */
    public function getSubtotalPriceSet(): ?ShopifyMoneyBag
    {
        return $this->subtotalPriceSet;
    }

    
    /**
     * The comma separated list of tags associated with the draft order.
     * Updating `tags` overwrites any existing tags that were previously added to the draft order.
     * To add new tags without overwriting existing tags, use the [tagsAdd](https://shopify.dev/api/admin-graphql/latest/mutations/tagsadd) mutation.
     *
     * @return string[]
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    
    /**
     * Whether the draft order is tax exempt.
     *
     * @return bool
     */
    public function getTaxExempt(): ?bool
    {
        return $this->taxExempt;
    }

    
    /**
     * The list of taxes lines charged for each line item and shipping line.
     *
     * @return ShopifyTaxLine[]
     */
    public function getTaxLines(): ?array
    {
        return $this->taxLines;
    }

    
    /**
     * Whether the line item prices include taxes.
     *
     * @return bool
     */
    public function getTaxesIncluded(): ?bool
    {
        return $this->taxesIncluded;
    }

    
    /**
     * Total discounts.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalDiscountsSet(): ?ShopifyMoneyBag
    {
        return $this->totalDiscountsSet;
    }

    
    /**
     * Total price of line items, excluding discounts.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalLineItemsPriceSet(): ?ShopifyMoneyBag
    {
        return $this->totalLineItemsPriceSet;
    }

    
    /**
     * The total price, in shop currency, includes taxes, shipping charges, and discounts.
     *
     * @return string
     */
    public function getTotalPrice(): mixed
    {
        return $this->totalPrice;
    }

    
    /**
     * The total price, includes taxes, shipping charges, and discounts.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalPriceSet(): ?ShopifyMoneyBag
    {
        return $this->totalPriceSet;
    }

    
    /**
     * The sum of individual line item quantities.
     * If the draft order has bundle items, this is the sum containing the quantities of individual items in the bundle.
     *
     * @return int
     */
    public function getTotalQuantityOfLineItems(): ?int
    {
        return $this->totalQuantityOfLineItems;
    }

    
    /**
     * The total shipping price in shop currency.
     *
     * @return string
     */
    public function getTotalShippingPrice(): mixed
    {
        return $this->totalShippingPrice;
    }

    
    /**
     * The total shipping price.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalShippingPriceSet(): ?ShopifyMoneyBag
    {
        return $this->totalShippingPriceSet;
    }

    
    /**
     * The total tax in shop currency.
     *
     * @return string
     */
    public function getTotalTax(): mixed
    {
        return $this->totalTax;
    }

    
    /**
     * The total tax.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalTaxSet(): ?ShopifyMoneyBag
    {
        return $this->totalTaxSet;
    }

    
    /**
     * The total weight in grams of the draft order.
     *
     * @return string
     */
    public function getTotalWeight(): mixed
    {
        return $this->totalWeight;
    }

    
    /**
     * Fingerprint of the current cart.
     * In order to have bundles work, the fingerprint must be passed to
     * each request as it was previously returned, unmodified.
     *
     * @return string
     */
    public function getTransformerFingerprint(): ?string
    {
        return $this->transformerFingerprint;
    }

    
    /**
     * The date and time when the draft order was last changed.
     * The format is YYYY-MM-DD HH:mm:ss. For example, 2016-02-05 17:04:01.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

    
    /**
     * Whether the draft order will be visible to the customer on the self-serve portal.
     *
     * @return bool
     */
    public function getVisibleToCustomer(): ?bool
    {
        return $this->visibleToCustomer;
    }

    
    /**
     * The list of warnings raised while calculating.
     *
     * @return ShopifyDraftOrderWarning[]
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['acceptAutomaticDiscounts']) && $data['acceptAutomaticDiscounts'] !== null) {
                $instance->acceptAutomaticDiscounts = $data['acceptAutomaticDiscounts'];
            }
            if (isset($data['allVariantPricesOverridden']) && $data['allVariantPricesOverridden'] !== null) {
                $instance->allVariantPricesOverridden = $data['allVariantPricesOverridden'];
            }
            if (isset($data['allowDiscountCodesInCheckout']) && $data['allowDiscountCodesInCheckout'] !== null) {
                $instance->allowDiscountCodesInCheckout = $data['allowDiscountCodesInCheckout'];
            }
            if (isset($data['anyVariantPricesOverridden']) && $data['anyVariantPricesOverridden'] !== null) {
                $instance->anyVariantPricesOverridden = $data['anyVariantPricesOverridden'];
            }
            if (isset($data['appliedDiscount']) && $data['appliedDiscount'] !== null) {
                $instance->appliedDiscount = ShopifyDraftOrderAppliedDiscount::fromArray($data['appliedDiscount']);
            }
            if (isset($data['billingAddress']) && $data['billingAddress'] !== null) {
                $instance->billingAddress = ShopifyMailingAddress::fromArray($data['billingAddress']);
            }
            if (isset($data['billingAddressMatchesShippingAddress']) && $data['billingAddressMatchesShippingAddress'] !== null) {
                $instance->billingAddressMatchesShippingAddress = $data['billingAddressMatchesShippingAddress'];
            }
            if (isset($data['completedAt']) && $data['completedAt'] !== null) {
                $instance->completedAt = new Carbon($data['completedAt']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['currencyCode']) && $data['currencyCode'] !== null) {
                $instance->currencyCode = $data['currencyCode'];
            }
            if (isset($data['customAttributes']) && $data['customAttributes'] !== null) {
                $instance->customAttributes = array_map(function($item) { return ShopifyAttribute::fromArray($item); }, $data['customAttributes']);
            }
            if (isset($data['customer']) && $data['customer'] !== null) {
                $instance->customer = ShopifyCustomer::fromArray($data['customer']);
            }
            if (isset($data['defaultCursor']) && $data['defaultCursor'] !== null) {
                $instance->defaultCursor = $data['defaultCursor'];
            }
            if (isset($data['discountCodes']) && $data['discountCodes'] !== null) {
                $instance->discountCodes = $data['discountCodes'];
            }
            if (isset($data['email']) && $data['email'] !== null) {
                $instance->email = $data['email'];
            }
            if (isset($data['events']) && $data['events'] !== null) {
                $instance->events = ShopifyEventConnection::fromArray($data['events']);
            }
            if (isset($data['hasTimelineComment']) && $data['hasTimelineComment'] !== null) {
                $instance->hasTimelineComment = $data['hasTimelineComment'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['invoiceEmailTemplateSubject']) && $data['invoiceEmailTemplateSubject'] !== null) {
                $instance->invoiceEmailTemplateSubject = $data['invoiceEmailTemplateSubject'];
            }
            if (isset($data['invoiceSentAt']) && $data['invoiceSentAt'] !== null) {
                $instance->invoiceSentAt = new Carbon($data['invoiceSentAt']);
            }
            if (isset($data['invoiceUrl']) && $data['invoiceUrl'] !== null) {
                $instance->invoiceUrl = $data['invoiceUrl'];
            }
            if (isset($data['legacyResourceId']) && $data['legacyResourceId'] !== null) {
                $instance->legacyResourceId = $data['legacyResourceId'];
            }
            if (isset($data['lineItems']) && $data['lineItems'] !== null) {
                $instance->lineItems = ShopifyDraftOrderLineItemConnection::fromArray($data['lineItems']);
            }
            if (isset($data['lineItemsSubtotalPrice']) && $data['lineItemsSubtotalPrice'] !== null) {
                $instance->lineItemsSubtotalPrice = ShopifyMoneyBag::fromArray($data['lineItemsSubtotalPrice']);
            }
            if (isset($data['localizationExtensions']) && $data['localizationExtensions'] !== null) {
                $instance->localizationExtensions = ShopifyLocalizationExtensionConnection::fromArray($data['localizationExtensions']);
            }
            if (isset($data['localizedFields']) && $data['localizedFields'] !== null) {
                $instance->localizedFields = ShopifyLocalizedFieldConnection::fromArray($data['localizedFields']);
            }
            if (isset($data['marketName']) && $data['marketName'] !== null) {
                $instance->marketName = $data['marketName'];
            }
            if (isset($data['marketRegionCountryCode']) && $data['marketRegionCountryCode'] !== null) {
                $instance->marketRegionCountryCode = $data['marketRegionCountryCode'];
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = ShopifyMetafield::fromArray($data['metafield']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = ShopifyMetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['note2']) && $data['note2'] !== null) {
                $instance->note2 = $data['note2'];
            }
            if (isset($data['order']) && $data['order'] !== null) {
                $instance->order = ShopifyOrder::fromArray($data['order']);
            }
            if (isset($data['paymentTerms']) && $data['paymentTerms'] !== null) {
                $instance->paymentTerms = ShopifyPaymentTerms::fromArray($data['paymentTerms']);
            }
            if (isset($data['phone']) && $data['phone'] !== null) {
                $instance->phone = $data['phone'];
            }
            if (isset($data['platformDiscounts']) && $data['platformDiscounts'] !== null) {
                $instance->platformDiscounts = array_map(function($item) { return ShopifyDraftOrderPlatformDiscount::fromArray($item); }, $data['platformDiscounts']);
            }
            if (isset($data['poNumber']) && $data['poNumber'] !== null) {
                $instance->poNumber = $data['poNumber'];
            }
            if (isset($data['presentmentCurrencyCode']) && $data['presentmentCurrencyCode'] !== null) {
                $instance->presentmentCurrencyCode = $data['presentmentCurrencyCode'];
            }
            if (isset($data['purchasingEntity']) && $data['purchasingEntity'] !== null) {
                $instance->purchasingEntity = ShopifyPurchasingEntityHydrator::fromArray($data['purchasingEntity']);
            }
            if (isset($data['ready']) && $data['ready'] !== null) {
                $instance->ready = $data['ready'];
            }
            if (isset($data['reserveInventoryUntil']) && $data['reserveInventoryUntil'] !== null) {
                $instance->reserveInventoryUntil = new Carbon($data['reserveInventoryUntil']);
            }
            if (isset($data['shippingAddress']) && $data['shippingAddress'] !== null) {
                $instance->shippingAddress = ShopifyMailingAddress::fromArray($data['shippingAddress']);
            }
            if (isset($data['shippingLine']) && $data['shippingLine'] !== null) {
                $instance->shippingLine = ShopifyShippingLine::fromArray($data['shippingLine']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['subtotalPrice']) && $data['subtotalPrice'] !== null) {
                $instance->subtotalPrice = $data['subtotalPrice'];
            }
            if (isset($data['subtotalPriceSet']) && $data['subtotalPriceSet'] !== null) {
                $instance->subtotalPriceSet = ShopifyMoneyBag::fromArray($data['subtotalPriceSet']);
            }
            if (isset($data['tags']) && $data['tags'] !== null) {
                $instance->tags = $data['tags'];
            }
            if (isset($data['taxExempt']) && $data['taxExempt'] !== null) {
                $instance->taxExempt = $data['taxExempt'];
            }
            if (isset($data['taxLines']) && $data['taxLines'] !== null) {
                $instance->taxLines = array_map(function($item) { return ShopifyTaxLine::fromArray($item); }, $data['taxLines']);
            }
            if (isset($data['taxesIncluded']) && $data['taxesIncluded'] !== null) {
                $instance->taxesIncluded = $data['taxesIncluded'];
            }
            if (isset($data['totalDiscountsSet']) && $data['totalDiscountsSet'] !== null) {
                $instance->totalDiscountsSet = ShopifyMoneyBag::fromArray($data['totalDiscountsSet']);
            }
            if (isset($data['totalLineItemsPriceSet']) && $data['totalLineItemsPriceSet'] !== null) {
                $instance->totalLineItemsPriceSet = ShopifyMoneyBag::fromArray($data['totalLineItemsPriceSet']);
            }
            if (isset($data['totalPrice']) && $data['totalPrice'] !== null) {
                $instance->totalPrice = $data['totalPrice'];
            }
            if (isset($data['totalPriceSet']) && $data['totalPriceSet'] !== null) {
                $instance->totalPriceSet = ShopifyMoneyBag::fromArray($data['totalPriceSet']);
            }
            if (isset($data['totalQuantityOfLineItems']) && $data['totalQuantityOfLineItems'] !== null) {
                $instance->totalQuantityOfLineItems = $data['totalQuantityOfLineItems'];
            }
            if (isset($data['totalShippingPrice']) && $data['totalShippingPrice'] !== null) {
                $instance->totalShippingPrice = $data['totalShippingPrice'];
            }
            if (isset($data['totalShippingPriceSet']) && $data['totalShippingPriceSet'] !== null) {
                $instance->totalShippingPriceSet = ShopifyMoneyBag::fromArray($data['totalShippingPriceSet']);
            }
            if (isset($data['totalTax']) && $data['totalTax'] !== null) {
                $instance->totalTax = $data['totalTax'];
            }
            if (isset($data['totalTaxSet']) && $data['totalTaxSet'] !== null) {
                $instance->totalTaxSet = ShopifyMoneyBag::fromArray($data['totalTaxSet']);
            }
            if (isset($data['totalWeight']) && $data['totalWeight'] !== null) {
                $instance->totalWeight = $data['totalWeight'];
            }
            if (isset($data['transformerFingerprint']) && $data['transformerFingerprint'] !== null) {
                $instance->transformerFingerprint = $data['transformerFingerprint'];
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
            }
            if (isset($data['visibleToCustomer']) && $data['visibleToCustomer'] !== null) {
                $instance->visibleToCustomer = $data['visibleToCustomer'];
            }
            if (isset($data['warnings']) && $data['warnings'] !== null) {
                $instance->warnings = array_map(function($item) { return ShopifyDraftOrderWarningHydrator::fromArray($item); }, $data['warnings']);
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->acceptAutomaticDiscounts !== null) {
                $data['acceptAutomaticDiscounts'] = $this->acceptAutomaticDiscounts;
            }
            if ($this->allVariantPricesOverridden !== null) {
                $data['allVariantPricesOverridden'] = $this->allVariantPricesOverridden;
            }
            if ($this->allowDiscountCodesInCheckout !== null) {
                $data['allowDiscountCodesInCheckout'] = $this->allowDiscountCodesInCheckout;
            }
            if ($this->anyVariantPricesOverridden !== null) {
                $data['anyVariantPricesOverridden'] = $this->anyVariantPricesOverridden;
            }
            if ($this->appliedDiscount !== null) {
                $data['appliedDiscount'] = $this->appliedDiscount->asArray();
            }
            if ($this->billingAddress !== null) {
                $data['billingAddress'] = $this->billingAddress->asArray();
            }
            if ($this->billingAddressMatchesShippingAddress !== null) {
                $data['billingAddressMatchesShippingAddress'] = $this->billingAddressMatchesShippingAddress;
            }
            if ($this->completedAt !== null) {
                $data['completedAt'] = $this->completedAt->toIso8601String();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->currencyCode !== null) {
                $data['currencyCode'] = $this->currencyCode;
            }
            if ($this->customAttributes !== null) {
                $data['customAttributes'] = array_map(function($item) { return $item->asArray(); }, $this->customAttributes);
            }
            if ($this->customer !== null) {
                $data['customer'] = $this->customer->asArray();
            }
            if ($this->defaultCursor !== null) {
                $data['defaultCursor'] = $this->defaultCursor;
            }
            if ($this->discountCodes !== null) {
                $data['discountCodes'] = $this->discountCodes;
            }
            if ($this->email !== null) {
                $data['email'] = $this->email;
            }
            if ($this->events !== null) {
                $data['events'] = $this->events->asArray();
            }
            if ($this->hasTimelineComment !== null) {
                $data['hasTimelineComment'] = $this->hasTimelineComment;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->invoiceEmailTemplateSubject !== null) {
                $data['invoiceEmailTemplateSubject'] = $this->invoiceEmailTemplateSubject;
            }
            if ($this->invoiceSentAt !== null) {
                $data['invoiceSentAt'] = $this->invoiceSentAt->toIso8601String();
            }
            if ($this->invoiceUrl !== null) {
                $data['invoiceUrl'] = $this->invoiceUrl;
            }
            if ($this->legacyResourceId !== null) {
                $data['legacyResourceId'] = $this->legacyResourceId;
            }
            if ($this->lineItems !== null) {
                $data['lineItems'] = $this->lineItems->asArray();
            }
            if ($this->lineItemsSubtotalPrice !== null) {
                $data['lineItemsSubtotalPrice'] = $this->lineItemsSubtotalPrice->asArray();
            }
            if ($this->localizationExtensions !== null) {
                $data['localizationExtensions'] = $this->localizationExtensions->asArray();
            }
            if ($this->localizedFields !== null) {
                $data['localizedFields'] = $this->localizedFields->asArray();
            }
            if ($this->marketName !== null) {
                $data['marketName'] = $this->marketName;
            }
            if ($this->marketRegionCountryCode !== null) {
                $data['marketRegionCountryCode'] = $this->marketRegionCountryCode;
            }
            if ($this->metafield !== null) {
                $data['metafield'] = $this->metafield->asArray();
            }
            if ($this->metafields !== null) {
                $data['metafields'] = $this->metafields->asArray();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->note2 !== null) {
                $data['note2'] = $this->note2;
            }
            if ($this->order !== null) {
                $data['order'] = $this->order->asArray();
            }
            if ($this->paymentTerms !== null) {
                $data['paymentTerms'] = $this->paymentTerms->asArray();
            }
            if ($this->phone !== null) {
                $data['phone'] = $this->phone;
            }
            if ($this->platformDiscounts !== null) {
                $data['platformDiscounts'] = array_map(function($item) { return $item->asArray(); }, $this->platformDiscounts);
            }
            if ($this->poNumber !== null) {
                $data['poNumber'] = $this->poNumber;
            }
            if ($this->presentmentCurrencyCode !== null) {
                $data['presentmentCurrencyCode'] = $this->presentmentCurrencyCode;
            }
            if ($this->purchasingEntity !== null) {
                $data['purchasingEntity'] = ShopifyPurchasingEntityHydrator::toArray($this->purchasingEntity);
            }
            if ($this->ready !== null) {
                $data['ready'] = $this->ready;
            }
            if ($this->reserveInventoryUntil !== null) {
                $data['reserveInventoryUntil'] = $this->reserveInventoryUntil->toIso8601String();
            }
            if ($this->shippingAddress !== null) {
                $data['shippingAddress'] = $this->shippingAddress->asArray();
            }
            if ($this->shippingLine !== null) {
                $data['shippingLine'] = $this->shippingLine->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->subtotalPrice !== null) {
                $data['subtotalPrice'] = $this->subtotalPrice;
            }
            if ($this->subtotalPriceSet !== null) {
                $data['subtotalPriceSet'] = $this->subtotalPriceSet->asArray();
            }
            if ($this->tags !== null) {
                $data['tags'] = $this->tags;
            }
            if ($this->taxExempt !== null) {
                $data['taxExempt'] = $this->taxExempt;
            }
            if ($this->taxLines !== null) {
                $data['taxLines'] = array_map(function($item) { return $item->asArray(); }, $this->taxLines);
            }
            if ($this->taxesIncluded !== null) {
                $data['taxesIncluded'] = $this->taxesIncluded;
            }
            if ($this->totalDiscountsSet !== null) {
                $data['totalDiscountsSet'] = $this->totalDiscountsSet->asArray();
            }
            if ($this->totalLineItemsPriceSet !== null) {
                $data['totalLineItemsPriceSet'] = $this->totalLineItemsPriceSet->asArray();
            }
            if ($this->totalPrice !== null) {
                $data['totalPrice'] = $this->totalPrice;
            }
            if ($this->totalPriceSet !== null) {
                $data['totalPriceSet'] = $this->totalPriceSet->asArray();
            }
            if ($this->totalQuantityOfLineItems !== null) {
                $data['totalQuantityOfLineItems'] = $this->totalQuantityOfLineItems;
            }
            if ($this->totalShippingPrice !== null) {
                $data['totalShippingPrice'] = $this->totalShippingPrice;
            }
            if ($this->totalShippingPriceSet !== null) {
                $data['totalShippingPriceSet'] = $this->totalShippingPriceSet->asArray();
            }
            if ($this->totalTax !== null) {
                $data['totalTax'] = $this->totalTax;
            }
            if ($this->totalTaxSet !== null) {
                $data['totalTaxSet'] = $this->totalTaxSet->asArray();
            }
            if ($this->totalWeight !== null) {
                $data['totalWeight'] = $this->totalWeight;
            }
            if ($this->transformerFingerprint !== null) {
                $data['transformerFingerprint'] = $this->transformerFingerprint;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            if ($this->visibleToCustomer !== null) {
                $data['visibleToCustomer'] = $this->visibleToCustomer;
            }
            if ($this->warnings !== null) {
                $data['warnings'] = array_map(function($item) { return ShopifyDraftOrderWarningHydrator::toArray($item); }, $this->warnings);
            }
            return $data;
        }
}
