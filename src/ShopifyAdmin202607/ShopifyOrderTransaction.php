<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCurrencyExchangeAdjustment;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPointOfSaleDevice;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyTransactionFee;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyLocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrderTransaction;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPaymentDetailsHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyImage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyPaymentsTransactionSet;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyStaffMember;

/**
 * The `OrderTransaction` object represents a payment transaction that's associated with an order. An order
 * transaction is a specific action or event that happens within the context of an order, such as a customer paying
 * for a purchase or receiving a refund, or other payment-related activity.
 *
 * Use the `OrderTransaction` object to capture the complete lifecycle of a payment, from initial
 * authorization to final settlement, including refunds and currency exchanges. Common use cases for using the
 * `OrderTransaction` object include:
 *
 * - Processing new payments for orders
 * - Managing payment authorizations and captures
 * - Processing refunds for returned items
 * - Tracking payment status and errors
 * - Managing multi-currency transactions
 * - Handling payment gateway integrations
 *
 * Each `OrderTransaction` object has a [`kind`](https://shopify.dev/docs/api/admin-graphql/latest/enums/OrderTransactionKind)
 * that defines the type of transaction and a [`status`](https://shopify.dev/docs/api/admin-graphql/latest/enums/OrderTransactionStatus)
 * that indicates the current state of the transaction. The object stores detailed information about payment
 * methods, gateway processing, and settlement details.
 *
 * Learn more about [payment processing](https://help.shopify.com/manual/payments)
 * and [payment gateway integrations](https://www.shopify.com/ca/payment-gateways).
 */
class ShopifyOrderTransaction implements ShopifyNode
{
    protected $accountNumber;
    protected $amount;
    protected $amountRoundingSet;
    protected $amountSet;
    protected $amountV2;
    protected $authorizationCode;
    protected $authorizationExpiresAt;
    protected $createdAt;
    protected $currencyExchangeAdjustment;
    protected $device;
    protected $errorCode;
    protected $fees;
    protected $formattedGateway;
    protected $gateway;
    protected $id;
    protected $kind;
    protected $location;
    protected $manualPaymentGateway;
    protected $manuallyCapturable;
    protected $maximumRefundable;
    protected $maximumRefundableV2;
    protected $multiCapturable;
    protected $order;
    protected $parentTransaction;
    protected $paymentDetails;
    protected $paymentIcon;
    protected $paymentId;
    protected $paymentMethod;
    protected $processedAt;
    protected $receiptJson;
    protected $settlementCurrency;
    protected $settlementCurrencyRate;
    protected $shopifyPaymentsSet;
    protected $status;
    protected $test;
    protected $totalUnsettled;
    protected $totalUnsettledSet;
    protected $totalUnsettledV2;
    protected $user;

    
    /**
     * The masked account number associated with the payment method.
     *
     * @return string
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    
    /**
     * The amount of money.
     *
     * @return string
     */
    public function getAmount(): mixed
    {
        return $this->amount;
    }

    
    /**
     * The rounding adjustment applied on the cash amount in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getAmountRoundingSet(): ?ShopifyMoneyBag
    {
        return $this->amountRoundingSet;
    }

    
    /**
     * The amount and currency of the transaction in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getAmountSet(): ?ShopifyMoneyBag
    {
        return $this->amountSet;
    }

    
    /**
     * The amount and currency of the transaction.
     *
     * @return ShopifyMoneyV2
     */
    public function getAmountV2(): ?ShopifyMoneyV2
    {
        return $this->amountV2;
    }

    
    /**
     * Authorization code associated with the transaction.
     *
     * @return string
     */
    public function getAuthorizationCode(): ?string
    {
        return $this->authorizationCode;
    }

    
    /**
     * The time when the authorization expires. This field is available only to stores on a Shopify Plus plan.
     *
     * @return Carbon
     */
    public function getAuthorizationExpiresAt(): ?Carbon
    {
        return $this->authorizationExpiresAt;
    }

    
    /**
     * Date and time when the transaction was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * An adjustment on the transaction showing the amount lost or gained  due to fluctuations in the currency exchange rate.
     *
     * @return ShopifyCurrencyExchangeAdjustment
     */
    public function getCurrencyExchangeAdjustment(): ?ShopifyCurrencyExchangeAdjustment
    {
        return $this->currencyExchangeAdjustment;
    }

    
    /**
     * The Shopify Point of Sale device used to process the transaction.
     *
     * @return ShopifyPointOfSaleDevice
     */
    public function getDevice(): ?ShopifyPointOfSaleDevice
    {
        return $this->device;
    }

    
    /**
     * A standardized error code, independent of the payment provider.
     *
     * @return string A ShopifyOrderTransactionErrorCodeEnumObject value
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    
    /**
     * The transaction fees charged on the order transaction. Only present for Shopify Payments transactions.
     *
     * @return ShopifyTransactionFee[]
     */
    public function getFees(): ?array
    {
        return $this->fees;
    }

    
    /**
     * The human-readable payment gateway name used to process the transaction.
     *
     * @return string
     */
    public function getFormattedGateway(): ?string
    {
        return $this->formattedGateway;
    }

    
    /**
     * The payment gateway used to process the transaction.
     *
     * @return string
     */
    public function getGateway(): ?string
    {
        return $this->gateway;
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
     * The kind of transaction.
     *
     * @return string A ShopifyOrderTransactionKindEnumObject value
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    
    /**
     * The physical location where the transaction was processed.
     *
     * @return ShopifyLocation
     */
    public function getLocation(): ?ShopifyLocation
    {
        return $this->location;
    }

    
    /**
     * Whether the transaction is processed by manual payment gateway.
     *
     * @return bool
     */
    public function getManualPaymentGateway(): ?bool
    {
        return $this->manualPaymentGateway;
    }

    
    /**
     * Whether the transaction can be manually captured.
     *
     * @return bool
     */
    public function getManuallyCapturable(): ?bool
    {
        return $this->manuallyCapturable;
    }

    
    /**
     * Specifies the available amount to refund on the gateway.
     * This value is only available for transactions of type `SuggestedRefund`.
     *
     * @return string
     */
    public function getMaximumRefundable(): mixed
    {
        return $this->maximumRefundable;
    }

    
    /**
     * Specifies the available amount with currency to refund on the gateway.
     * This value is only available for transactions of type `SuggestedRefund`.
     *
     * @return ShopifyMoneyV2
     */
    public function getMaximumRefundableV2(): ?ShopifyMoneyV2
    {
        return $this->maximumRefundableV2;
    }

    
    /**
     * Whether the transaction can be captured multiple times.
     *
     * @return bool
     */
    public function getMultiCapturable(): ?bool
    {
        return $this->multiCapturable;
    }

    
    /**
     * The associated order.
     *
     * @return ShopifyOrder
     */
    public function getOrder(): ?ShopifyOrder
    {
        return $this->order;
    }

    
    /**
     * The associated parent transaction, for example the authorization of a capture.
     *
     * @return ShopifyOrderTransaction
     */
    public function getParentTransaction(): ?ShopifyOrderTransaction
    {
        return $this->parentTransaction;
    }

    
    /**
     * The payment details for the transaction.
     *
     * @return ShopifyCardPaymentDetails|ShopifyLocalPaymentMethodsPaymentDetails|ShopifyPaypalWalletPaymentDetails|ShopifyShopPayInstallmentsPaymentDetails
     */
    public function getPaymentDetails(): ShopifyCardPaymentDetails|ShopifyLocalPaymentMethodsPaymentDetails|ShopifyPaypalWalletPaymentDetails|ShopifyShopPayInstallmentsPaymentDetails|null
    {
        return $this->paymentDetails;
    }

    
    /**
     * The payment icon to display for the transaction.
     *
     * @return ShopifyImage
     */
    public function getPaymentIcon(): ?ShopifyImage
    {
        return $this->paymentIcon;
    }

    
    /**
     * The payment ID associated with the transaction.
     *
     * @return string
     */
    public function getPaymentId(): ?string
    {
        return $this->paymentId;
    }

    
    /**
     * The payment method used for the transaction. This value is `null` if the payment method is unknown.
     *
     * @return string A ShopifyPaymentMethodsEnumObject value
     */
    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    
    /**
     * Date and time when the transaction was processed.
     *
     * @return Carbon
     */
    public function getProcessedAt(): ?Carbon
    {
        return $this->processedAt;
    }

    
    /**
     * The transaction receipt that the payment gateway attaches to the transaction.
     * > **Note:** This field is **gateway-specific** and **not a stable contract**.
     * > Its structure and contents can vary by payment gateway and may change without notice.
     * > Apps **shouldn't parse or rely on this field for business logic**; prefer typed fields on `OrderTransaction` and related objects.
     *
     * @return string
     */
    public function getReceiptJson(): mixed
    {
        return $this->receiptJson;
    }

    
    /**
     * The settlement currency.
     *
     * @return string A ShopifyCurrencyCodeEnumObject value
     */
    public function getSettlementCurrency(): ?string
    {
        return $this->settlementCurrency;
    }

    
    /**
     * The rate used when converting the transaction amount to settlement currency.
     *
     * @return string
     */
    public function getSettlementCurrencyRate(): mixed
    {
        return $this->settlementCurrencyRate;
    }

    
    /**
     * Contains all Shopify Payments information related to an order transaction. This field is available only to stores on a Shopify Plus plan.
     *
     * @return ShopifyShopifyPaymentsTransactionSet
     */
    public function getShopifyPaymentsSet(): ?ShopifyShopifyPaymentsTransactionSet
    {
        return $this->shopifyPaymentsSet;
    }

    
    /**
     * The status of this transaction.
     *
     * @return string A ShopifyOrderTransactionStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * Whether the transaction is a test transaction.
     *
     * @return bool
     */
    public function getTest(): ?bool
    {
        return $this->test;
    }

    
    /**
     * The amount of the original authorization that remains unsettled.
     * During a pending capture, this reflects the full outstanding balance including the pending amount.
     * When no capture is pending, this equals the capturable amount.
     * Only available when an amount is capturable or manually marked as paid.
     *
     * @return string
     */
    public function getTotalUnsettled(): mixed
    {
        return $this->totalUnsettled;
    }

    
    /**
     * The amount of the original authorization that remains unsettled, in shop and presentment currencies.
     * During a pending capture, this reflects the full outstanding balance including the pending amount.
     * When no capture is pending, this equals the capturable amount.
     * Only available when an amount is capturable or manually marked as paid.
     *
     * @return ShopifyMoneyBag
     */
    public function getTotalUnsettledSet(): ?ShopifyMoneyBag
    {
        return $this->totalUnsettledSet;
    }

    
    /**
     * The amount with currency of the original authorization that remains unsettled.
     * During a pending capture, this reflects the full outstanding balance including the pending amount.
     * When no capture is pending, this equals the capturable amount.
     * Only available when an amount is capturable or manually marked as paid.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalUnsettledV2(): ?ShopifyMoneyV2
    {
        return $this->totalUnsettledV2;
    }

    
    /**
     * Staff member who was logged into the Shopify POS device when the transaction was processed.
     *
     * @return ShopifyStaffMember
     */
    public function getUser(): ?ShopifyStaffMember
    {
        return $this->user;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['accountNumber']) && $data['accountNumber'] !== null) {
                $instance->accountNumber = $data['accountNumber'];
            }
            if (isset($data['amount']) && $data['amount'] !== null) {
                $instance->amount = $data['amount'];
            }
            if (isset($data['amountRoundingSet']) && $data['amountRoundingSet'] !== null) {
                $instance->amountRoundingSet = ShopifyMoneyBag::fromArray($data['amountRoundingSet']);
            }
            if (isset($data['amountSet']) && $data['amountSet'] !== null) {
                $instance->amountSet = ShopifyMoneyBag::fromArray($data['amountSet']);
            }
            if (isset($data['amountV2']) && $data['amountV2'] !== null) {
                $instance->amountV2 = ShopifyMoneyV2::fromArray($data['amountV2']);
            }
            if (isset($data['authorizationCode']) && $data['authorizationCode'] !== null) {
                $instance->authorizationCode = $data['authorizationCode'];
            }
            if (isset($data['authorizationExpiresAt']) && $data['authorizationExpiresAt'] !== null) {
                $instance->authorizationExpiresAt = new Carbon($data['authorizationExpiresAt']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['currencyExchangeAdjustment']) && $data['currencyExchangeAdjustment'] !== null) {
                $instance->currencyExchangeAdjustment = ShopifyCurrencyExchangeAdjustment::fromArray($data['currencyExchangeAdjustment']);
            }
            if (isset($data['device']) && $data['device'] !== null) {
                $instance->device = ShopifyPointOfSaleDevice::fromArray($data['device']);
            }
            if (isset($data['errorCode']) && $data['errorCode'] !== null) {
                $instance->errorCode = $data['errorCode'];
            }
            if (isset($data['fees']) && $data['fees'] !== null) {
                $instance->fees = array_map(function($item) { return ShopifyTransactionFee::fromArray($item); }, $data['fees']);
            }
            if (isset($data['formattedGateway']) && $data['formattedGateway'] !== null) {
                $instance->formattedGateway = $data['formattedGateway'];
            }
            if (isset($data['gateway']) && $data['gateway'] !== null) {
                $instance->gateway = $data['gateway'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['kind']) && $data['kind'] !== null) {
                $instance->kind = $data['kind'];
            }
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = ShopifyLocation::fromArray($data['location']);
            }
            if (isset($data['manualPaymentGateway']) && $data['manualPaymentGateway'] !== null) {
                $instance->manualPaymentGateway = $data['manualPaymentGateway'];
            }
            if (isset($data['manuallyCapturable']) && $data['manuallyCapturable'] !== null) {
                $instance->manuallyCapturable = $data['manuallyCapturable'];
            }
            if (isset($data['maximumRefundable']) && $data['maximumRefundable'] !== null) {
                $instance->maximumRefundable = $data['maximumRefundable'];
            }
            if (isset($data['maximumRefundableV2']) && $data['maximumRefundableV2'] !== null) {
                $instance->maximumRefundableV2 = ShopifyMoneyV2::fromArray($data['maximumRefundableV2']);
            }
            if (isset($data['multiCapturable']) && $data['multiCapturable'] !== null) {
                $instance->multiCapturable = $data['multiCapturable'];
            }
            if (isset($data['order']) && $data['order'] !== null) {
                $instance->order = ShopifyOrder::fromArray($data['order']);
            }
            if (isset($data['parentTransaction']) && $data['parentTransaction'] !== null) {
                $instance->parentTransaction = ShopifyOrderTransaction::fromArray($data['parentTransaction']);
            }
            if (isset($data['paymentDetails']) && $data['paymentDetails'] !== null) {
                $instance->paymentDetails = ShopifyPaymentDetailsHydrator::fromArray($data['paymentDetails']);
            }
            if (isset($data['paymentIcon']) && $data['paymentIcon'] !== null) {
                $instance->paymentIcon = ShopifyImage::fromArray($data['paymentIcon']);
            }
            if (isset($data['paymentId']) && $data['paymentId'] !== null) {
                $instance->paymentId = $data['paymentId'];
            }
            if (isset($data['paymentMethod']) && $data['paymentMethod'] !== null) {
                $instance->paymentMethod = $data['paymentMethod'];
            }
            if (isset($data['processedAt']) && $data['processedAt'] !== null) {
                $instance->processedAt = new Carbon($data['processedAt']);
            }
            if (isset($data['receiptJson']) && $data['receiptJson'] !== null) {
                $instance->receiptJson = $data['receiptJson'];
            }
            if (isset($data['settlementCurrency']) && $data['settlementCurrency'] !== null) {
                $instance->settlementCurrency = $data['settlementCurrency'];
            }
            if (isset($data['settlementCurrencyRate']) && $data['settlementCurrencyRate'] !== null) {
                $instance->settlementCurrencyRate = $data['settlementCurrencyRate'];
            }
            if (isset($data['shopifyPaymentsSet']) && $data['shopifyPaymentsSet'] !== null) {
                $instance->shopifyPaymentsSet = ShopifyShopifyPaymentsTransactionSet::fromArray($data['shopifyPaymentsSet']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['test']) && $data['test'] !== null) {
                $instance->test = $data['test'];
            }
            if (isset($data['totalUnsettled']) && $data['totalUnsettled'] !== null) {
                $instance->totalUnsettled = $data['totalUnsettled'];
            }
            if (isset($data['totalUnsettledSet']) && $data['totalUnsettledSet'] !== null) {
                $instance->totalUnsettledSet = ShopifyMoneyBag::fromArray($data['totalUnsettledSet']);
            }
            if (isset($data['totalUnsettledV2']) && $data['totalUnsettledV2'] !== null) {
                $instance->totalUnsettledV2 = ShopifyMoneyV2::fromArray($data['totalUnsettledV2']);
            }
            if (isset($data['user']) && $data['user'] !== null) {
                $instance->user = ShopifyStaffMember::fromArray($data['user']);
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
            if ($this->accountNumber !== null) {
                $data['accountNumber'] = $this->accountNumber;
            }
            if ($this->amount !== null) {
                $data['amount'] = $this->amount;
            }
            if ($this->amountRoundingSet !== null) {
                $data['amountRoundingSet'] = $this->amountRoundingSet->asArray();
            }
            if ($this->amountSet !== null) {
                $data['amountSet'] = $this->amountSet->asArray();
            }
            if ($this->amountV2 !== null) {
                $data['amountV2'] = $this->amountV2->asArray();
            }
            if ($this->authorizationCode !== null) {
                $data['authorizationCode'] = $this->authorizationCode;
            }
            if ($this->authorizationExpiresAt !== null) {
                $data['authorizationExpiresAt'] = $this->authorizationExpiresAt->toIso8601String();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->currencyExchangeAdjustment !== null) {
                $data['currencyExchangeAdjustment'] = $this->currencyExchangeAdjustment->asArray();
            }
            if ($this->device !== null) {
                $data['device'] = $this->device->asArray();
            }
            if ($this->errorCode !== null) {
                $data['errorCode'] = $this->errorCode;
            }
            if ($this->fees !== null) {
                $data['fees'] = array_map(function($item) { return $item->asArray(); }, $this->fees);
            }
            if ($this->formattedGateway !== null) {
                $data['formattedGateway'] = $this->formattedGateway;
            }
            if ($this->gateway !== null) {
                $data['gateway'] = $this->gateway;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->kind !== null) {
                $data['kind'] = $this->kind;
            }
            if ($this->location !== null) {
                $data['location'] = $this->location->asArray();
            }
            if ($this->manualPaymentGateway !== null) {
                $data['manualPaymentGateway'] = $this->manualPaymentGateway;
            }
            if ($this->manuallyCapturable !== null) {
                $data['manuallyCapturable'] = $this->manuallyCapturable;
            }
            if ($this->maximumRefundable !== null) {
                $data['maximumRefundable'] = $this->maximumRefundable;
            }
            if ($this->maximumRefundableV2 !== null) {
                $data['maximumRefundableV2'] = $this->maximumRefundableV2->asArray();
            }
            if ($this->multiCapturable !== null) {
                $data['multiCapturable'] = $this->multiCapturable;
            }
            if ($this->order !== null) {
                $data['order'] = $this->order->asArray();
            }
            if ($this->parentTransaction !== null) {
                $data['parentTransaction'] = $this->parentTransaction->asArray();
            }
            if ($this->paymentDetails !== null) {
                $data['paymentDetails'] = ShopifyPaymentDetailsHydrator::toArray($this->paymentDetails);
            }
            if ($this->paymentIcon !== null) {
                $data['paymentIcon'] = $this->paymentIcon->asArray();
            }
            if ($this->paymentId !== null) {
                $data['paymentId'] = $this->paymentId;
            }
            if ($this->paymentMethod !== null) {
                $data['paymentMethod'] = $this->paymentMethod;
            }
            if ($this->processedAt !== null) {
                $data['processedAt'] = $this->processedAt->toIso8601String();
            }
            if ($this->receiptJson !== null) {
                $data['receiptJson'] = $this->receiptJson;
            }
            if ($this->settlementCurrency !== null) {
                $data['settlementCurrency'] = $this->settlementCurrency;
            }
            if ($this->settlementCurrencyRate !== null) {
                $data['settlementCurrencyRate'] = $this->settlementCurrencyRate;
            }
            if ($this->shopifyPaymentsSet !== null) {
                $data['shopifyPaymentsSet'] = $this->shopifyPaymentsSet->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->test !== null) {
                $data['test'] = $this->test;
            }
            if ($this->totalUnsettled !== null) {
                $data['totalUnsettled'] = $this->totalUnsettled;
            }
            if ($this->totalUnsettledSet !== null) {
                $data['totalUnsettledSet'] = $this->totalUnsettledSet->asArray();
            }
            if ($this->totalUnsettledV2 !== null) {
                $data['totalUnsettledV2'] = $this->totalUnsettledV2->asArray();
            }
            if ($this->user !== null) {
                $data['user'] = $this->user->asArray();
            }
            return $data;
        }
}
