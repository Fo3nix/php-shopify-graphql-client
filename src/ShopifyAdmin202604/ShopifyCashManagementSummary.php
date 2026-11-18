<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyV2;

/**
 * A summary of cash management data.
 */
class ShopifyCashManagementSummary
{
    protected $cashBalanceAtEnd;
    protected $cashBalanceAtStart;
    protected $netCash;
    protected $sessionsClosed;
    protected $sessionsOpened;
    protected $totalDiscrepancies;

    
    /**
     * The cumulative cash balance of all cash drawers at the provided end date.
     *
     * @return ShopifyMoneyV2
     */
    public function getCashBalanceAtEnd(): ?ShopifyMoneyV2
    {
        return $this->cashBalanceAtEnd;
    }

    
    /**
     * The cumulative cash balance of all cash drawers at the provided start date.
     *
     * @return ShopifyMoneyV2
     */
    public function getCashBalanceAtStart(): ?ShopifyMoneyV2
    {
        return $this->cashBalanceAtStart;
    }

    
    /**
     * The net cash flow during the specified period (start date to end date). Calculated as net sales plus adjustments.
     *
     * @return ShopifyMoneyV2
     */
    public function getNetCash(): ?ShopifyMoneyV2
    {
        return $this->netCash;
    }

    
    /**
     * The number of sessions that were closed during the specified period (start date to end date).
     *
     * @return int
     */
    public function getSessionsClosed(): ?int
    {
        return $this->sessionsClosed;
    }

    
    /**
     * The number of sessions that were opened during the specified period (start date to end date).
     *
     * @return int
     */
    public function getSessionsOpened(): ?int
    {
        return $this->sessionsOpened;
    }

    
    /**
     * The total cash discrepancies during the specified period (start date to end date).
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalDiscrepancies(): ?ShopifyMoneyV2
    {
        return $this->totalDiscrepancies;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['cashBalanceAtEnd']) && $data['cashBalanceAtEnd'] !== null) {
                $instance->cashBalanceAtEnd = ShopifyMoneyV2::fromArray($data['cashBalanceAtEnd']);
            }
            if (isset($data['cashBalanceAtStart']) && $data['cashBalanceAtStart'] !== null) {
                $instance->cashBalanceAtStart = ShopifyMoneyV2::fromArray($data['cashBalanceAtStart']);
            }
            if (isset($data['netCash']) && $data['netCash'] !== null) {
                $instance->netCash = ShopifyMoneyV2::fromArray($data['netCash']);
            }
            if (isset($data['sessionsClosed']) && $data['sessionsClosed'] !== null) {
                $instance->sessionsClosed = $data['sessionsClosed'];
            }
            if (isset($data['sessionsOpened']) && $data['sessionsOpened'] !== null) {
                $instance->sessionsOpened = $data['sessionsOpened'];
            }
            if (isset($data['totalDiscrepancies']) && $data['totalDiscrepancies'] !== null) {
                $instance->totalDiscrepancies = ShopifyMoneyV2::fromArray($data['totalDiscrepancies']);
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
            if ($this->cashBalanceAtEnd !== null) {
                $data['cashBalanceAtEnd'] = $this->cashBalanceAtEnd->asArray();
            }
            if ($this->cashBalanceAtStart !== null) {
                $data['cashBalanceAtStart'] = $this->cashBalanceAtStart->asArray();
            }
            if ($this->netCash !== null) {
                $data['netCash'] = $this->netCash->asArray();
            }
            if ($this->sessionsClosed !== null) {
                $data['sessionsClosed'] = $this->sessionsClosed;
            }
            if ($this->sessionsOpened !== null) {
                $data['sessionsOpened'] = $this->sessionsOpened;
            }
            if ($this->totalDiscrepancies !== null) {
                $data['totalDiscrepancies'] = $this->totalDiscrepancies->asArray();
            }
            return $data;
        }
}
