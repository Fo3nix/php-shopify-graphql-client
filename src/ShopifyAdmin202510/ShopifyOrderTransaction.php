<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyMoneyV2;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCurrencyExchangeAdjustment;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyPointOfSaleDevice;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyTransactionFee;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyLocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyOrderTransaction;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyPaymentDetails;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyImage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyShopifyPaymentsTransactionSet;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyStaffMember;

class ShopifyOrderTransaction
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
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    
    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getAmountRoundingSet()
    {
        return $this->amountRoundingSet;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getAmountSet()
    {
        return $this->amountSet;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getAmountV2()
    {
        return $this->amountV2;
    }

    
    /**
     * @return string
     */
    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }

    
    /**
     * @return Carbon
     */
    public function getAuthorizationExpiresAt()
    {
        return $this->authorizationExpiresAt;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return ShopifyCurrencyExchangeAdjustment
     */
    public function getCurrencyExchangeAdjustment()
    {
        return $this->currencyExchangeAdjustment;
    }

    
    /**
     * @return ShopifyPointOfSaleDevice
     */
    public function getDevice()
    {
        return $this->device;
    }

    
    /**
     * @return ShopifyOrderTransactionErrorCodeEnumObject
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    
    /**
     * @return ShopifyTransactionFee[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    
    /**
     * @return string
     */
    public function getFormattedGateway()
    {
        return $this->formattedGateway;
    }

    
    /**
     * @return string
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyOrderTransactionKindEnumObject
     */
    public function getKind()
    {
        return $this->kind;
    }

    
    /**
     * @return ShopifyLocation
     */
    public function getLocation()
    {
        return $this->location;
    }

    
    /**
     * @return bool
     */
    public function getManualPaymentGateway()
    {
        return $this->manualPaymentGateway;
    }

    
    /**
     * @return bool
     */
    public function getManuallyCapturable()
    {
        return $this->manuallyCapturable;
    }

    
    /**
     * @return string
     */
    public function getMaximumRefundable()
    {
        return $this->maximumRefundable;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getMaximumRefundableV2()
    {
        return $this->maximumRefundableV2;
    }

    
    /**
     * @return bool
     */
    public function getMultiCapturable()
    {
        return $this->multiCapturable;
    }

    
    /**
     * @return ShopifyOrder
     */
    public function getOrder()
    {
        return $this->order;
    }

    
    /**
     * @return ShopifyOrderTransaction
     */
    public function getParentTransaction()
    {
        return $this->parentTransaction;
    }

    
    /**
     * @return ShopifyPaymentDetails
     */
    public function getPaymentDetails()
    {
        return $this->paymentDetails;
    }

    
    /**
     * @return ShopifyImage
     */
    public function getPaymentIcon()
    {
        return $this->paymentIcon;
    }

    
    /**
     * @return string
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    
    /**
     * @return ShopifyPaymentMethodsEnumObject
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    
    /**
     * @return Carbon
     */
    public function getProcessedAt()
    {
        return $this->processedAt;
    }

    
    /**
     * @return string
     */
    public function getReceiptJson()
    {
        return $this->receiptJson;
    }

    
    /**
     * @return ShopifyCurrencyCodeEnumObject
     */
    public function getSettlementCurrency()
    {
        return $this->settlementCurrency;
    }

    
    /**
     * @return string
     */
    public function getSettlementCurrencyRate()
    {
        return $this->settlementCurrencyRate;
    }

    
    /**
     * @return ShopifyShopifyPaymentsTransactionSet
     */
    public function getShopifyPaymentsSet()
    {
        return $this->shopifyPaymentsSet;
    }

    
    /**
     * @return ShopifyOrderTransactionStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return bool
     */
    public function getTest()
    {
        return $this->test;
    }

    
    /**
     * @return string
     */
    public function getTotalUnsettled()
    {
        return $this->totalUnsettled;
    }

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getTotalUnsettledSet()
    {
        return $this->totalUnsettledSet;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getTotalUnsettledV2()
    {
        return $this->totalUnsettledV2;
    }

    
    /**
     * @return ShopifyStaffMember
     */
    public function getUser()
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
                $instance->paymentDetails = ShopifyPaymentDetails::fromArray($data['paymentDetails']);
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
                $data['paymentDetails'] = $this->paymentDetails->asArray();
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
