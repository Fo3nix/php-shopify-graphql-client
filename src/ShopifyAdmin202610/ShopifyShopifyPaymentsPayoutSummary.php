<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;

class ShopifyShopifyPaymentsPayoutSummary
{
    protected $adjustmentsFee;
    protected $adjustmentsGross;
    protected $advanceFees;
    protected $advanceGross;
    protected $chargesFee;
    protected $chargesGross;
    protected $refundsFee;
    protected $refundsFeeGross;
    protected $reservedFundsFee;
    protected $reservedFundsGross;
    protected $retriedPayoutsFee;
    protected $retriedPayoutsGross;
    protected $usdcRebateCreditAmount;

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getAdjustmentsFee()
    {
        return $this->adjustmentsFee;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getAdjustmentsGross()
    {
        return $this->adjustmentsGross;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getAdvanceFees()
    {
        return $this->advanceFees;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getAdvanceGross()
    {
        return $this->advanceGross;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getChargesFee()
    {
        return $this->chargesFee;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getChargesGross()
    {
        return $this->chargesGross;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getRefundsFee()
    {
        return $this->refundsFee;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getRefundsFeeGross()
    {
        return $this->refundsFeeGross;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getReservedFundsFee()
    {
        return $this->reservedFundsFee;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getReservedFundsGross()
    {
        return $this->reservedFundsGross;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getRetriedPayoutsFee()
    {
        return $this->retriedPayoutsFee;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getRetriedPayoutsGross()
    {
        return $this->retriedPayoutsGross;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getUsdcRebateCreditAmount()
    {
        return $this->usdcRebateCreditAmount;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['adjustmentsFee']) && $data['adjustmentsFee'] !== null) {
                $instance->adjustmentsFee = ShopifyMoneyV2::fromArray($data['adjustmentsFee']);
            }
            if (isset($data['adjustmentsGross']) && $data['adjustmentsGross'] !== null) {
                $instance->adjustmentsGross = ShopifyMoneyV2::fromArray($data['adjustmentsGross']);
            }
            if (isset($data['advanceFees']) && $data['advanceFees'] !== null) {
                $instance->advanceFees = ShopifyMoneyV2::fromArray($data['advanceFees']);
            }
            if (isset($data['advanceGross']) && $data['advanceGross'] !== null) {
                $instance->advanceGross = ShopifyMoneyV2::fromArray($data['advanceGross']);
            }
            if (isset($data['chargesFee']) && $data['chargesFee'] !== null) {
                $instance->chargesFee = ShopifyMoneyV2::fromArray($data['chargesFee']);
            }
            if (isset($data['chargesGross']) && $data['chargesGross'] !== null) {
                $instance->chargesGross = ShopifyMoneyV2::fromArray($data['chargesGross']);
            }
            if (isset($data['refundsFee']) && $data['refundsFee'] !== null) {
                $instance->refundsFee = ShopifyMoneyV2::fromArray($data['refundsFee']);
            }
            if (isset($data['refundsFeeGross']) && $data['refundsFeeGross'] !== null) {
                $instance->refundsFeeGross = ShopifyMoneyV2::fromArray($data['refundsFeeGross']);
            }
            if (isset($data['reservedFundsFee']) && $data['reservedFundsFee'] !== null) {
                $instance->reservedFundsFee = ShopifyMoneyV2::fromArray($data['reservedFundsFee']);
            }
            if (isset($data['reservedFundsGross']) && $data['reservedFundsGross'] !== null) {
                $instance->reservedFundsGross = ShopifyMoneyV2::fromArray($data['reservedFundsGross']);
            }
            if (isset($data['retriedPayoutsFee']) && $data['retriedPayoutsFee'] !== null) {
                $instance->retriedPayoutsFee = ShopifyMoneyV2::fromArray($data['retriedPayoutsFee']);
            }
            if (isset($data['retriedPayoutsGross']) && $data['retriedPayoutsGross'] !== null) {
                $instance->retriedPayoutsGross = ShopifyMoneyV2::fromArray($data['retriedPayoutsGross']);
            }
            if (isset($data['usdcRebateCreditAmount']) && $data['usdcRebateCreditAmount'] !== null) {
                $instance->usdcRebateCreditAmount = ShopifyMoneyV2::fromArray($data['usdcRebateCreditAmount']);
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
            if ($this->adjustmentsFee !== null) {
                $data['adjustmentsFee'] = $this->adjustmentsFee->asArray();
            }
            if ($this->adjustmentsGross !== null) {
                $data['adjustmentsGross'] = $this->adjustmentsGross->asArray();
            }
            if ($this->advanceFees !== null) {
                $data['advanceFees'] = $this->advanceFees->asArray();
            }
            if ($this->advanceGross !== null) {
                $data['advanceGross'] = $this->advanceGross->asArray();
            }
            if ($this->chargesFee !== null) {
                $data['chargesFee'] = $this->chargesFee->asArray();
            }
            if ($this->chargesGross !== null) {
                $data['chargesGross'] = $this->chargesGross->asArray();
            }
            if ($this->refundsFee !== null) {
                $data['refundsFee'] = $this->refundsFee->asArray();
            }
            if ($this->refundsFeeGross !== null) {
                $data['refundsFeeGross'] = $this->refundsFeeGross->asArray();
            }
            if ($this->reservedFundsFee !== null) {
                $data['reservedFundsFee'] = $this->reservedFundsFee->asArray();
            }
            if ($this->reservedFundsGross !== null) {
                $data['reservedFundsGross'] = $this->reservedFundsGross->asArray();
            }
            if ($this->retriedPayoutsFee !== null) {
                $data['retriedPayoutsFee'] = $this->retriedPayoutsFee->asArray();
            }
            if ($this->retriedPayoutsGross !== null) {
                $data['retriedPayoutsGross'] = $this->retriedPayoutsGross->asArray();
            }
            if ($this->usdcRebateCreditAmount !== null) {
                $data['usdcRebateCreditAmount'] = $this->usdcRebateCreditAmount->asArray();
            }
            return $data;
        }
}
