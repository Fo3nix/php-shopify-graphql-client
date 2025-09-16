<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;

class ShopifyPaymentsPayoutSummary
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

    
    /**
     * @return MoneyV2
     */
    public function getAdjustmentsFee()
    {
        return $this->adjustmentsFee;
    }

    
    /**
     * @return MoneyV2
     */
    public function getAdjustmentsGross()
    {
        return $this->adjustmentsGross;
    }

    
    /**
     * @return MoneyV2
     */
    public function getAdvanceFees()
    {
        return $this->advanceFees;
    }

    
    /**
     * @return MoneyV2
     */
    public function getAdvanceGross()
    {
        return $this->advanceGross;
    }

    
    /**
     * @return MoneyV2
     */
    public function getChargesFee()
    {
        return $this->chargesFee;
    }

    
    /**
     * @return MoneyV2
     */
    public function getChargesGross()
    {
        return $this->chargesGross;
    }

    
    /**
     * @return MoneyV2
     */
    public function getRefundsFee()
    {
        return $this->refundsFee;
    }

    
    /**
     * @return MoneyV2
     */
    public function getRefundsFeeGross()
    {
        return $this->refundsFeeGross;
    }

    
    /**
     * @return MoneyV2
     */
    public function getReservedFundsFee()
    {
        return $this->reservedFundsFee;
    }

    
    /**
     * @return MoneyV2
     */
    public function getReservedFundsGross()
    {
        return $this->reservedFundsGross;
    }

    
    /**
     * @return MoneyV2
     */
    public function getRetriedPayoutsFee()
    {
        return $this->retriedPayoutsFee;
    }

    
    /**
     * @return MoneyV2
     */
    public function getRetriedPayoutsGross()
    {
        return $this->retriedPayoutsGross;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['adjustmentsFee']) && $data['adjustmentsFee'] !== null) {
                $instance->adjustmentsFee = MoneyV2::fromArray($data['adjustmentsFee']);
            }
            if (isset($data['adjustmentsGross']) && $data['adjustmentsGross'] !== null) {
                $instance->adjustmentsGross = MoneyV2::fromArray($data['adjustmentsGross']);
            }
            if (isset($data['advanceFees']) && $data['advanceFees'] !== null) {
                $instance->advanceFees = MoneyV2::fromArray($data['advanceFees']);
            }
            if (isset($data['advanceGross']) && $data['advanceGross'] !== null) {
                $instance->advanceGross = MoneyV2::fromArray($data['advanceGross']);
            }
            if (isset($data['chargesFee']) && $data['chargesFee'] !== null) {
                $instance->chargesFee = MoneyV2::fromArray($data['chargesFee']);
            }
            if (isset($data['chargesGross']) && $data['chargesGross'] !== null) {
                $instance->chargesGross = MoneyV2::fromArray($data['chargesGross']);
            }
            if (isset($data['refundsFee']) && $data['refundsFee'] !== null) {
                $instance->refundsFee = MoneyV2::fromArray($data['refundsFee']);
            }
            if (isset($data['refundsFeeGross']) && $data['refundsFeeGross'] !== null) {
                $instance->refundsFeeGross = MoneyV2::fromArray($data['refundsFeeGross']);
            }
            if (isset($data['reservedFundsFee']) && $data['reservedFundsFee'] !== null) {
                $instance->reservedFundsFee = MoneyV2::fromArray($data['reservedFundsFee']);
            }
            if (isset($data['reservedFundsGross']) && $data['reservedFundsGross'] !== null) {
                $instance->reservedFundsGross = MoneyV2::fromArray($data['reservedFundsGross']);
            }
            if (isset($data['retriedPayoutsFee']) && $data['retriedPayoutsFee'] !== null) {
                $instance->retriedPayoutsFee = MoneyV2::fromArray($data['retriedPayoutsFee']);
            }
            if (isset($data['retriedPayoutsGross']) && $data['retriedPayoutsGross'] !== null) {
                $instance->retriedPayoutsGross = MoneyV2::fromArray($data['retriedPayoutsGross']);
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
            return $data;
        }
}
