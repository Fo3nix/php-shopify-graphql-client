<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyBag;

/**
 * An order adjustment accounts for the difference between a calculated and actual refund amount.
 */
class ShopifyOrderAdjustment implements ShopifyNode
{
    protected $amountSet;
    protected $id;
    protected $reason;
    protected $taxAmountSet;

    
    /**
     * The amount of the order adjustment in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getAmountSet(): ?ShopifyMoneyBag
    {
        return $this->amountSet;
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
     * An optional reason that explains a discrepancy between calculated and actual refund amounts.
     *
     * @return string A ShopifyOrderAdjustmentDiscrepancyReasonEnumObject value
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    
    /**
     * The tax amount of the order adjustment in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getTaxAmountSet(): ?ShopifyMoneyBag
    {
        return $this->taxAmountSet;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['amountSet']) && $data['amountSet'] !== null) {
                $instance->amountSet = ShopifyMoneyBag::fromArray($data['amountSet']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['reason']) && $data['reason'] !== null) {
                $instance->reason = $data['reason'];
            }
            if (isset($data['taxAmountSet']) && $data['taxAmountSet'] !== null) {
                $instance->taxAmountSet = ShopifyMoneyBag::fromArray($data['taxAmountSet']);
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
            if ($this->amountSet !== null) {
                $data['amountSet'] = $this->amountSet->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->reason !== null) {
                $data['reason'] = $this->reason;
            }
            if ($this->taxAmountSet !== null) {
                $data['taxAmountSet'] = $this->taxAmountSet->asArray();
            }
            return $data;
        }
}
