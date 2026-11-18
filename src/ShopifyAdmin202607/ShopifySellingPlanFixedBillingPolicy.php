<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifySellingPlanCheckoutCharge;
use Carbon\Carbon;

/**
 * The fixed selling plan billing policy defines how much of the price of the product will be billed to customer
 * at checkout. If there is an outstanding balance, it determines when it will be paid.
 */
class ShopifySellingPlanFixedBillingPolicy
{
    protected $checkoutCharge;
    protected $remainingBalanceChargeExactTime;
    protected $remainingBalanceChargeTimeAfterCheckout;
    protected $remainingBalanceChargeTrigger;

    
    /**
     * The checkout charge when the full amount isn't charged at checkout.
     *
     * @return ShopifySellingPlanCheckoutCharge
     */
    public function getCheckoutCharge(): ?ShopifySellingPlanCheckoutCharge
    {
        return $this->checkoutCharge;
    }

    
    /**
     * The exact time when to capture the full payment.
     *
     * @return Carbon
     */
    public function getRemainingBalanceChargeExactTime(): ?Carbon
    {
        return $this->remainingBalanceChargeExactTime;
    }

    
    /**
     * The period after remaining_balance_charge_trigger, before capturing the full payment. Expressed as an ISO8601 duration.
     *
     * @return string
     */
    public function getRemainingBalanceChargeTimeAfterCheckout(): ?string
    {
        return $this->remainingBalanceChargeTimeAfterCheckout;
    }

    
    /**
     * When to capture payment for amount due.
     *
     * @return string A ShopifySellingPlanRemainingBalanceChargeTriggerEnumObject value
     */
    public function getRemainingBalanceChargeTrigger(): ?string
    {
        return $this->remainingBalanceChargeTrigger;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['checkoutCharge']) && $data['checkoutCharge'] !== null) {
                $instance->checkoutCharge = ShopifySellingPlanCheckoutCharge::fromArray($data['checkoutCharge']);
            }
            if (isset($data['remainingBalanceChargeExactTime']) && $data['remainingBalanceChargeExactTime'] !== null) {
                $instance->remainingBalanceChargeExactTime = new Carbon($data['remainingBalanceChargeExactTime']);
            }
            if (isset($data['remainingBalanceChargeTimeAfterCheckout']) && $data['remainingBalanceChargeTimeAfterCheckout'] !== null) {
                $instance->remainingBalanceChargeTimeAfterCheckout = $data['remainingBalanceChargeTimeAfterCheckout'];
            }
            if (isset($data['remainingBalanceChargeTrigger']) && $data['remainingBalanceChargeTrigger'] !== null) {
                $instance->remainingBalanceChargeTrigger = $data['remainingBalanceChargeTrigger'];
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
            if ($this->checkoutCharge !== null) {
                $data['checkoutCharge'] = $this->checkoutCharge->asArray();
            }
            if ($this->remainingBalanceChargeExactTime !== null) {
                $data['remainingBalanceChargeExactTime'] = $this->remainingBalanceChargeExactTime->toIso8601String();
            }
            if ($this->remainingBalanceChargeTimeAfterCheckout !== null) {
                $data['remainingBalanceChargeTimeAfterCheckout'] = $this->remainingBalanceChargeTimeAfterCheckout;
            }
            if ($this->remainingBalanceChargeTrigger !== null) {
                $data['remainingBalanceChargeTrigger'] = $this->remainingBalanceChargeTrigger;
            }
            return $data;
        }
}
