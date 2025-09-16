<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DraftOrderAppliedDiscount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MailingAddress;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Attribute;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Customer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\EventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DraftOrderLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\LocalizationExtensionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\LocalizedFieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Metafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Order;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\PaymentTerms;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DraftOrderPlatformDiscount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\PurchasingEntity;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShippingLine;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\TaxLine;

class DraftOrder
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
     * @return bool
     */
    public function getAcceptAutomaticDiscounts()
    {
        return $this->acceptAutomaticDiscounts;
    }

    
    /**
     * @return bool
     */
    public function getAllVariantPricesOverridden()
    {
        return $this->allVariantPricesOverridden;
    }

    
    /**
     * @return bool
     */
    public function getAllowDiscountCodesInCheckout()
    {
        return $this->allowDiscountCodesInCheckout;
    }

    
    /**
     * @return bool
     */
    public function getAnyVariantPricesOverridden()
    {
        return $this->anyVariantPricesOverridden;
    }

    
    /**
     * @return DraftOrderAppliedDiscount
     */
    public function getAppliedDiscount()
    {
        return $this->appliedDiscount;
    }

    
    /**
     * @return MailingAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    
    /**
     * @return bool
     */
    public function getBillingAddressMatchesShippingAddress()
    {
        return $this->billingAddressMatchesShippingAddress;
    }

    
    /**
     * @return Carbon
     */
    public function getCompletedAt()
    {
        return $this->completedAt;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return CurrencyCodeEnumObject
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    
    /**
     * @return Attribute[]
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    
    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    
    /**
     * @return string
     */
    public function getDefaultCursor()
    {
        return $this->defaultCursor;
    }

    
    /**
     * @return string[]
     */
    public function getDiscountCodes()
    {
        return $this->discountCodes;
    }

    
    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    
    /**
     * @return EventConnection
     */
    public function getEvents()
    {
        return $this->events;
    }

    
    /**
     * @return bool
     */
    public function getHasTimelineComment()
    {
        return $this->hasTimelineComment;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getInvoiceEmailTemplateSubject()
    {
        return $this->invoiceEmailTemplateSubject;
    }

    
    /**
     * @return Carbon
     */
    public function getInvoiceSentAt()
    {
        return $this->invoiceSentAt;
    }

    
    /**
     * @return string
     */
    public function getInvoiceUrl()
    {
        return $this->invoiceUrl;
    }

    
    /**
     * @return string
     */
    public function getLegacyResourceId()
    {
        return $this->legacyResourceId;
    }

    
    /**
     * @return DraftOrderLineItemConnection
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    
    /**
     * @return MoneyBag
     */
    public function getLineItemsSubtotalPrice()
    {
        return $this->lineItemsSubtotalPrice;
    }

    
    /**
     * @return LocalizationExtensionConnection
     */
    public function getLocalizationExtensions()
    {
        return $this->localizationExtensions;
    }

    
    /**
     * @return LocalizedFieldConnection
     */
    public function getLocalizedFields()
    {
        return $this->localizedFields;
    }

    
    /**
     * @return string
     */
    public function getMarketName()
    {
        return $this->marketName;
    }

    
    /**
     * @return CountryCodeEnumObject
     */
    public function getMarketRegionCountryCode()
    {
        return $this->marketRegionCountryCode;
    }

    
    /**
     * @return Metafield
     */
    public function getMetafield()
    {
        return $this->metafield;
    }

    
    /**
     * @return MetafieldConnection
     */
    public function getMetafields()
    {
        return $this->metafields;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return string
     */
    public function getNote2()
    {
        return $this->note2;
    }

    
    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    
    /**
     * @return PaymentTerms
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    
    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    
    /**
     * @return DraftOrderPlatformDiscount[]
     */
    public function getPlatformDiscounts()
    {
        return $this->platformDiscounts;
    }

    
    /**
     * @return string
     */
    public function getPoNumber()
    {
        return $this->poNumber;
    }

    
    /**
     * @return CurrencyCodeEnumObject
     */
    public function getPresentmentCurrencyCode()
    {
        return $this->presentmentCurrencyCode;
    }

    
    /**
     * @return PurchasingEntity
     */
    public function getPurchasingEntity()
    {
        return $this->purchasingEntity;
    }

    
    /**
     * @return bool
     */
    public function getReady()
    {
        return $this->ready;
    }

    
    /**
     * @return Carbon
     */
    public function getReserveInventoryUntil()
    {
        return $this->reserveInventoryUntil;
    }

    
    /**
     * @return MailingAddress
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    
    /**
     * @return ShippingLine
     */
    public function getShippingLine()
    {
        return $this->shippingLine;
    }

    
    /**
     * @return DraftOrderStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return string
     */
    public function getSubtotalPrice()
    {
        return $this->subtotalPrice;
    }

    
    /**
     * @return MoneyBag
     */
    public function getSubtotalPriceSet()
    {
        return $this->subtotalPriceSet;
    }

    
    /**
     * @return string[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    
    /**
     * @return bool
     */
    public function getTaxExempt()
    {
        return $this->taxExempt;
    }

    
    /**
     * @return TaxLine[]
     */
    public function getTaxLines()
    {
        return $this->taxLines;
    }

    
    /**
     * @return bool
     */
    public function getTaxesIncluded()
    {
        return $this->taxesIncluded;
    }

    
    /**
     * @return MoneyBag
     */
    public function getTotalDiscountsSet()
    {
        return $this->totalDiscountsSet;
    }

    
    /**
     * @return MoneyBag
     */
    public function getTotalLineItemsPriceSet()
    {
        return $this->totalLineItemsPriceSet;
    }

    
    /**
     * @return string
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    
    /**
     * @return MoneyBag
     */
    public function getTotalPriceSet()
    {
        return $this->totalPriceSet;
    }

    
    /**
     * @return int
     */
    public function getTotalQuantityOfLineItems()
    {
        return $this->totalQuantityOfLineItems;
    }

    
    /**
     * @return string
     */
    public function getTotalShippingPrice()
    {
        return $this->totalShippingPrice;
    }

    
    /**
     * @return MoneyBag
     */
    public function getTotalShippingPriceSet()
    {
        return $this->totalShippingPriceSet;
    }

    
    /**
     * @return string
     */
    public function getTotalTax()
    {
        return $this->totalTax;
    }

    
    /**
     * @return MoneyBag
     */
    public function getTotalTaxSet()
    {
        return $this->totalTaxSet;
    }

    
    /**
     * @return string
     */
    public function getTotalWeight()
    {
        return $this->totalWeight;
    }

    
    /**
     * @return string
     */
    public function getTransformerFingerprint()
    {
        return $this->transformerFingerprint;
    }

    
    /**
     * @return Carbon
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    
    /**
     * @return bool
     */
    public function getVisibleToCustomer()
    {
        return $this->visibleToCustomer;
    }

    
    /**
     * @return mixed[]
     */
    public function getWarnings()
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
                $instance->appliedDiscount = DraftOrderAppliedDiscount::fromArray($data['appliedDiscount']);
            }
            if (isset($data['billingAddress']) && $data['billingAddress'] !== null) {
                $instance->billingAddress = MailingAddress::fromArray($data['billingAddress']);
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
                $instance->customAttributes = array_map(function($item) { return Attribute::fromArray($item); }, $data['customAttributes']);
            }
            if (isset($data['customer']) && $data['customer'] !== null) {
                $instance->customer = Customer::fromArray($data['customer']);
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
                $instance->events = EventConnection::fromArray($data['events']);
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
                $instance->lineItems = DraftOrderLineItemConnection::fromArray($data['lineItems']);
            }
            if (isset($data['lineItemsSubtotalPrice']) && $data['lineItemsSubtotalPrice'] !== null) {
                $instance->lineItemsSubtotalPrice = MoneyBag::fromArray($data['lineItemsSubtotalPrice']);
            }
            if (isset($data['localizationExtensions']) && $data['localizationExtensions'] !== null) {
                $instance->localizationExtensions = LocalizationExtensionConnection::fromArray($data['localizationExtensions']);
            }
            if (isset($data['localizedFields']) && $data['localizedFields'] !== null) {
                $instance->localizedFields = LocalizedFieldConnection::fromArray($data['localizedFields']);
            }
            if (isset($data['marketName']) && $data['marketName'] !== null) {
                $instance->marketName = $data['marketName'];
            }
            if (isset($data['marketRegionCountryCode']) && $data['marketRegionCountryCode'] !== null) {
                $instance->marketRegionCountryCode = $data['marketRegionCountryCode'];
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = Metafield::fromArray($data['metafield']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = MetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['note2']) && $data['note2'] !== null) {
                $instance->note2 = $data['note2'];
            }
            if (isset($data['order']) && $data['order'] !== null) {
                $instance->order = Order::fromArray($data['order']);
            }
            if (isset($data['paymentTerms']) && $data['paymentTerms'] !== null) {
                $instance->paymentTerms = PaymentTerms::fromArray($data['paymentTerms']);
            }
            if (isset($data['phone']) && $data['phone'] !== null) {
                $instance->phone = $data['phone'];
            }
            if (isset($data['platformDiscounts']) && $data['platformDiscounts'] !== null) {
                $instance->platformDiscounts = array_map(function($item) { return DraftOrderPlatformDiscount::fromArray($item); }, $data['platformDiscounts']);
            }
            if (isset($data['poNumber']) && $data['poNumber'] !== null) {
                $instance->poNumber = $data['poNumber'];
            }
            if (isset($data['presentmentCurrencyCode']) && $data['presentmentCurrencyCode'] !== null) {
                $instance->presentmentCurrencyCode = $data['presentmentCurrencyCode'];
            }
            if (isset($data['purchasingEntity']) && $data['purchasingEntity'] !== null) {
                $instance->purchasingEntity = PurchasingEntity::fromArray($data['purchasingEntity']);
            }
            if (isset($data['ready']) && $data['ready'] !== null) {
                $instance->ready = $data['ready'];
            }
            if (isset($data['reserveInventoryUntil']) && $data['reserveInventoryUntil'] !== null) {
                $instance->reserveInventoryUntil = new Carbon($data['reserveInventoryUntil']);
            }
            if (isset($data['shippingAddress']) && $data['shippingAddress'] !== null) {
                $instance->shippingAddress = MailingAddress::fromArray($data['shippingAddress']);
            }
            if (isset($data['shippingLine']) && $data['shippingLine'] !== null) {
                $instance->shippingLine = ShippingLine::fromArray($data['shippingLine']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['subtotalPrice']) && $data['subtotalPrice'] !== null) {
                $instance->subtotalPrice = $data['subtotalPrice'];
            }
            if (isset($data['subtotalPriceSet']) && $data['subtotalPriceSet'] !== null) {
                $instance->subtotalPriceSet = MoneyBag::fromArray($data['subtotalPriceSet']);
            }
            if (isset($data['tags']) && $data['tags'] !== null) {
                $instance->tags = $data['tags'];
            }
            if (isset($data['taxExempt']) && $data['taxExempt'] !== null) {
                $instance->taxExempt = $data['taxExempt'];
            }
            if (isset($data['taxLines']) && $data['taxLines'] !== null) {
                $instance->taxLines = array_map(function($item) { return TaxLine::fromArray($item); }, $data['taxLines']);
            }
            if (isset($data['taxesIncluded']) && $data['taxesIncluded'] !== null) {
                $instance->taxesIncluded = $data['taxesIncluded'];
            }
            if (isset($data['totalDiscountsSet']) && $data['totalDiscountsSet'] !== null) {
                $instance->totalDiscountsSet = MoneyBag::fromArray($data['totalDiscountsSet']);
            }
            if (isset($data['totalLineItemsPriceSet']) && $data['totalLineItemsPriceSet'] !== null) {
                $instance->totalLineItemsPriceSet = MoneyBag::fromArray($data['totalLineItemsPriceSet']);
            }
            if (isset($data['totalPrice']) && $data['totalPrice'] !== null) {
                $instance->totalPrice = $data['totalPrice'];
            }
            if (isset($data['totalPriceSet']) && $data['totalPriceSet'] !== null) {
                $instance->totalPriceSet = MoneyBag::fromArray($data['totalPriceSet']);
            }
            if (isset($data['totalQuantityOfLineItems']) && $data['totalQuantityOfLineItems'] !== null) {
                $instance->totalQuantityOfLineItems = $data['totalQuantityOfLineItems'];
            }
            if (isset($data['totalShippingPrice']) && $data['totalShippingPrice'] !== null) {
                $instance->totalShippingPrice = $data['totalShippingPrice'];
            }
            if (isset($data['totalShippingPriceSet']) && $data['totalShippingPriceSet'] !== null) {
                $instance->totalShippingPriceSet = MoneyBag::fromArray($data['totalShippingPriceSet']);
            }
            if (isset($data['totalTax']) && $data['totalTax'] !== null) {
                $instance->totalTax = $data['totalTax'];
            }
            if (isset($data['totalTaxSet']) && $data['totalTaxSet'] !== null) {
                $instance->totalTaxSet = MoneyBag::fromArray($data['totalTaxSet']);
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
                $instance->warnings = $data['warnings'];
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
                $data['purchasingEntity'] = $this->purchasingEntity->asArray();
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
                $data['warnings'] = $this->warnings;
            }
            return $data;
        }
}
