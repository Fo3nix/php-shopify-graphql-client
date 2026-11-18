<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyResourceAlert;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDraftOrderAppliedDiscount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShippingRate;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCustomer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCalculatedDraftOrderLineItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDraftOrderPlatformDiscount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPurchasingEntityHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShippingLine;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyTaxLine;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDraftOrderWarningHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDraftOrderWarning;

/**
 * Calculated pricing, taxes, and discounts for a [`DraftOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DraftOrder). Includes the complete financial breakdown with line items, discounts, shipping costs, tax calculations, and totals in both shop and presentment currencies.
 *
 * Available [`ShippingRate`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShippingRate) options are included when a valid shipping address and line items are present.
 *
 * > Note:
 * > Returns alerts and warnings when issues occur during calculation, such as insufficient inventory or incompatible discounts.
 */
class ShopifyCalculatedDraftOrder
{
    protected $acceptAutomaticDiscounts;
    protected $alerts;
    protected $allVariantPricesOverridden;
    protected $anyVariantPricesOverridden;
    protected $appliedDiscount;
    protected $availableShippingRates;
    protected $billingAddressMatchesShippingAddress;
    protected $currencyCode;
    protected $customer;
    protected $discountCodes;
    protected $lineItems;
    protected $lineItemsSubtotalPrice;
    protected $marketName;
    protected $marketRegionCountryCode;
    protected $phone;
    protected $platformDiscounts;
    protected $presentmentCurrencyCode;
    protected $purchasingEntity;
    protected $shippingLine;
    protected $subtotalPrice;
    protected $subtotalPriceSet;
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
    protected $transformerFingerprint;
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
     * The list of alerts raised while calculating.
     *
     * @return ShopifyResourceAlert[]
     */
    public function getAlerts(): ?array
    {
        return $this->alerts;
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
     * The available shipping rates.
     * Requires a customer with a valid shipping address and at least one line item.
     *
     * @return ShopifyShippingRate[]
     */
    public function getAvailableShippingRates(): ?array
    {
        return $this->availableShippingRates;
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
     * The shop currency used for calculation.
     *
     * @return string A ShopifyCurrencyCodeEnumObject value
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
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
     * All discount codes applied.
     *
     * @return string[]
     */
    public function getDiscountCodes(): ?array
    {
        return $this->discountCodes;
    }

    
    /**
     * The list of the line items in the calculated draft order.
     *
     * @return ShopifyCalculatedDraftOrderLineItem[]
     */
    public function getLineItems(): ?array
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
     * The line item containing the shipping information and costs.
     *
     * @return ShopifyShippingLine
     */
    public function getShippingLine(): ?ShopifyShippingLine
    {
        return $this->shippingLine;
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
            if (isset($data['alerts']) && $data['alerts'] !== null) {
                $instance->alerts = array_map(function($item) { return ShopifyResourceAlert::fromArray($item); }, $data['alerts']);
            }
            if (isset($data['allVariantPricesOverridden']) && $data['allVariantPricesOverridden'] !== null) {
                $instance->allVariantPricesOverridden = $data['allVariantPricesOverridden'];
            }
            if (isset($data['anyVariantPricesOverridden']) && $data['anyVariantPricesOverridden'] !== null) {
                $instance->anyVariantPricesOverridden = $data['anyVariantPricesOverridden'];
            }
            if (isset($data['appliedDiscount']) && $data['appliedDiscount'] !== null) {
                $instance->appliedDiscount = ShopifyDraftOrderAppliedDiscount::fromArray($data['appliedDiscount']);
            }
            if (isset($data['availableShippingRates']) && $data['availableShippingRates'] !== null) {
                $instance->availableShippingRates = array_map(function($item) { return ShopifyShippingRate::fromArray($item); }, $data['availableShippingRates']);
            }
            if (isset($data['billingAddressMatchesShippingAddress']) && $data['billingAddressMatchesShippingAddress'] !== null) {
                $instance->billingAddressMatchesShippingAddress = $data['billingAddressMatchesShippingAddress'];
            }
            if (isset($data['currencyCode']) && $data['currencyCode'] !== null) {
                $instance->currencyCode = $data['currencyCode'];
            }
            if (isset($data['customer']) && $data['customer'] !== null) {
                $instance->customer = ShopifyCustomer::fromArray($data['customer']);
            }
            if (isset($data['discountCodes']) && $data['discountCodes'] !== null) {
                $instance->discountCodes = $data['discountCodes'];
            }
            if (isset($data['lineItems']) && $data['lineItems'] !== null) {
                $instance->lineItems = array_map(function($item) { return ShopifyCalculatedDraftOrderLineItem::fromArray($item); }, $data['lineItems']);
            }
            if (isset($data['lineItemsSubtotalPrice']) && $data['lineItemsSubtotalPrice'] !== null) {
                $instance->lineItemsSubtotalPrice = ShopifyMoneyBag::fromArray($data['lineItemsSubtotalPrice']);
            }
            if (isset($data['marketName']) && $data['marketName'] !== null) {
                $instance->marketName = $data['marketName'];
            }
            if (isset($data['marketRegionCountryCode']) && $data['marketRegionCountryCode'] !== null) {
                $instance->marketRegionCountryCode = $data['marketRegionCountryCode'];
            }
            if (isset($data['phone']) && $data['phone'] !== null) {
                $instance->phone = $data['phone'];
            }
            if (isset($data['platformDiscounts']) && $data['platformDiscounts'] !== null) {
                $instance->platformDiscounts = array_map(function($item) { return ShopifyDraftOrderPlatformDiscount::fromArray($item); }, $data['platformDiscounts']);
            }
            if (isset($data['presentmentCurrencyCode']) && $data['presentmentCurrencyCode'] !== null) {
                $instance->presentmentCurrencyCode = $data['presentmentCurrencyCode'];
            }
            if (isset($data['purchasingEntity']) && $data['purchasingEntity'] !== null) {
                $instance->purchasingEntity = ShopifyPurchasingEntityHydrator::fromArray($data['purchasingEntity']);
            }
            if (isset($data['shippingLine']) && $data['shippingLine'] !== null) {
                $instance->shippingLine = ShopifyShippingLine::fromArray($data['shippingLine']);
            }
            if (isset($data['subtotalPrice']) && $data['subtotalPrice'] !== null) {
                $instance->subtotalPrice = $data['subtotalPrice'];
            }
            if (isset($data['subtotalPriceSet']) && $data['subtotalPriceSet'] !== null) {
                $instance->subtotalPriceSet = ShopifyMoneyBag::fromArray($data['subtotalPriceSet']);
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
            if (isset($data['transformerFingerprint']) && $data['transformerFingerprint'] !== null) {
                $instance->transformerFingerprint = $data['transformerFingerprint'];
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
            if ($this->alerts !== null) {
                $data['alerts'] = array_map(function($item) { return $item->asArray(); }, $this->alerts);
            }
            if ($this->allVariantPricesOverridden !== null) {
                $data['allVariantPricesOverridden'] = $this->allVariantPricesOverridden;
            }
            if ($this->anyVariantPricesOverridden !== null) {
                $data['anyVariantPricesOverridden'] = $this->anyVariantPricesOverridden;
            }
            if ($this->appliedDiscount !== null) {
                $data['appliedDiscount'] = $this->appliedDiscount->asArray();
            }
            if ($this->availableShippingRates !== null) {
                $data['availableShippingRates'] = array_map(function($item) { return $item->asArray(); }, $this->availableShippingRates);
            }
            if ($this->billingAddressMatchesShippingAddress !== null) {
                $data['billingAddressMatchesShippingAddress'] = $this->billingAddressMatchesShippingAddress;
            }
            if ($this->currencyCode !== null) {
                $data['currencyCode'] = $this->currencyCode;
            }
            if ($this->customer !== null) {
                $data['customer'] = $this->customer->asArray();
            }
            if ($this->discountCodes !== null) {
                $data['discountCodes'] = $this->discountCodes;
            }
            if ($this->lineItems !== null) {
                $data['lineItems'] = array_map(function($item) { return $item->asArray(); }, $this->lineItems);
            }
            if ($this->lineItemsSubtotalPrice !== null) {
                $data['lineItemsSubtotalPrice'] = $this->lineItemsSubtotalPrice->asArray();
            }
            if ($this->marketName !== null) {
                $data['marketName'] = $this->marketName;
            }
            if ($this->marketRegionCountryCode !== null) {
                $data['marketRegionCountryCode'] = $this->marketRegionCountryCode;
            }
            if ($this->phone !== null) {
                $data['phone'] = $this->phone;
            }
            if ($this->platformDiscounts !== null) {
                $data['platformDiscounts'] = array_map(function($item) { return $item->asArray(); }, $this->platformDiscounts);
            }
            if ($this->presentmentCurrencyCode !== null) {
                $data['presentmentCurrencyCode'] = $this->presentmentCurrencyCode;
            }
            if ($this->purchasingEntity !== null) {
                $data['purchasingEntity'] = ShopifyPurchasingEntityHydrator::toArray($this->purchasingEntity);
            }
            if ($this->shippingLine !== null) {
                $data['shippingLine'] = $this->shippingLine->asArray();
            }
            if ($this->subtotalPrice !== null) {
                $data['subtotalPrice'] = $this->subtotalPrice;
            }
            if ($this->subtotalPriceSet !== null) {
                $data['subtotalPriceSet'] = $this->subtotalPriceSet->asArray();
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
            if ($this->transformerFingerprint !== null) {
                $data['transformerFingerprint'] = $this->transformerFingerprint;
            }
            if ($this->warnings !== null) {
                $data['warnings'] = array_map(function($item) { return ShopifyDraftOrderWarningHydrator::toArray($item); }, $this->warnings);
            }
            return $data;
        }
}
