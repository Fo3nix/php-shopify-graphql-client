<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyOrderTransaction;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPointOfSaleDevicePaymentSession;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyStaffMember;
use Carbon\Carbon;

/**
 * A cash transaction activity.
 */
class ShopifyCashTransactionActivity implements ShopifyCashActivity
{
    protected $cash;
    protected $orderTransaction;
    protected $paymentSession;
    protected $staffMember;
    protected $time;
    protected $type;

    
    /**
     * The amount of cash added or removed as part of the activity.
     *
     * @return ShopifyMoneyV2
     */
    public function getCash(): ?ShopifyMoneyV2
    {
        return $this->cash;
    }

    
    /**
     * The order transaction associated with the activity.
     *
     * @return ShopifyOrderTransaction
     */
    public function getOrderTransaction(): ?ShopifyOrderTransaction
    {
        return $this->orderTransaction;
    }

    
    /**
     * The point of sale device payment session associated with the activity.
     *
     * @return ShopifyPointOfSaleDevicePaymentSession
     */
    public function getPaymentSession(): ?ShopifyPointOfSaleDevicePaymentSession
    {
        return $this->paymentSession;
    }

    
    /**
     * The staff member who performed the activity.
     *
     * @return ShopifyStaffMember
     */
    public function getStaffMember(): ?ShopifyStaffMember
    {
        return $this->staffMember;
    }

    
    /**
     * The time at which the activity occurred.
     *
     * @return Carbon
     */
    public function getTime(): ?Carbon
    {
        return $this->time;
    }

    
    /**
     * The type of transaction activity.
     *
     * @return string A ShopifyCashTransactionActivityTypeEnumObject value
     */
    public function getType(): ?string
    {
        return $this->type;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['cash']) && $data['cash'] !== null) {
                $instance->cash = ShopifyMoneyV2::fromArray($data['cash']);
            }
            if (isset($data['orderTransaction']) && $data['orderTransaction'] !== null) {
                $instance->orderTransaction = ShopifyOrderTransaction::fromArray($data['orderTransaction']);
            }
            if (isset($data['paymentSession']) && $data['paymentSession'] !== null) {
                $instance->paymentSession = ShopifyPointOfSaleDevicePaymentSession::fromArray($data['paymentSession']);
            }
            if (isset($data['staffMember']) && $data['staffMember'] !== null) {
                $instance->staffMember = ShopifyStaffMember::fromArray($data['staffMember']);
            }
            if (isset($data['time']) && $data['time'] !== null) {
                $instance->time = new Carbon($data['time']);
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
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
            if ($this->cash !== null) {
                $data['cash'] = $this->cash->asArray();
            }
            if ($this->orderTransaction !== null) {
                $data['orderTransaction'] = $this->orderTransaction->asArray();
            }
            if ($this->paymentSession !== null) {
                $data['paymentSession'] = $this->paymentSession->asArray();
            }
            if ($this->staffMember !== null) {
                $data['staffMember'] = $this->staffMember->asArray();
            }
            if ($this->time !== null) {
                $data['time'] = $this->time->toIso8601String();
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            return $data;
        }
}
