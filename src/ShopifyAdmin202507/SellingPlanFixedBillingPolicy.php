<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SellingPlanCheckoutCharge;
use Carbon\Carbon;

class SellingPlanFixedBillingPolicy
{
    protected $checkoutCharge;
    protected $remainingBalanceChargeExactTime;
    protected $remainingBalanceChargeTimeAfterCheckout;
    protected $remainingBalanceChargeTrigger;

    
    /**
     * @return SellingPlanCheckoutCharge
     */
    public function getCheckoutCharge()
    {
        return $this->checkoutCharge;
    }

    
    /**
     * @return Carbon
     */
    public function getRemainingBalanceChargeExactTime()
    {
        return $this->remainingBalanceChargeExactTime;
    }

    
    /**
     * @return string
     */
    public function getRemainingBalanceChargeTimeAfterCheckout()
    {
        return $this->remainingBalanceChargeTimeAfterCheckout;
    }

    
    /**
     * @return SellingPlanRemainingBalanceChargeTriggerEnumObject
     */
    public function getRemainingBalanceChargeTrigger()
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
                $instance->checkoutCharge = SellingPlanCheckoutCharge::fromArray($data['checkoutCharge']);
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
