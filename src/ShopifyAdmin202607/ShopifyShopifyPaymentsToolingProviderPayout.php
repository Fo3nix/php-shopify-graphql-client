<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;
use Carbon\Carbon;

/**
 * Relevant reference information for an alternate currency payout.
 */
class ShopifyShopifyPaymentsToolingProviderPayout
{
    protected $amount;
    protected $arrivalDate;
    protected $createdAt;
    protected $currency;
    protected $remoteId;

    
    /**
     * The balance amount the alternate currency payout was created for.
     *
     * @return ShopifyMoneyV2
     */
    public function getAmount(): ?ShopifyMoneyV2
    {
        return $this->amount;
    }

    
    /**
     * A timestamp for the arrival of the alternate currency payout.
     *
     * @return Carbon
     */
    public function getArrivalDate(): ?Carbon
    {
        return $this->arrivalDate;
    }

    
    /**
     * A timestamp for the creation of the alternate currency payout.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The currency alternate currency payout was created in.
     *
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    
    /**
     * The remote ID for the alternate currency payout.
     *
     * @return string
     */
    public function getRemoteId(): ?string
    {
        return $this->remoteId;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['amount']) && $data['amount'] !== null) {
                $instance->amount = ShopifyMoneyV2::fromArray($data['amount']);
            }
            if (isset($data['arrivalDate']) && $data['arrivalDate'] !== null) {
                $instance->arrivalDate = new Carbon($data['arrivalDate']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['currency']) && $data['currency'] !== null) {
                $instance->currency = $data['currency'];
            }
            if (isset($data['remoteId']) && $data['remoteId'] !== null) {
                $instance->remoteId = $data['remoteId'];
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
            if ($this->amount !== null) {
                $data['amount'] = $this->amount->asArray();
            }
            if ($this->arrivalDate !== null) {
                $data['arrivalDate'] = $this->arrivalDate->toIso8601String();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->currency !== null) {
                $data['currency'] = $this->currency;
            }
            if ($this->remoteId !== null) {
                $data['remoteId'] = $this->remoteId;
            }
            return $data;
        }
}
