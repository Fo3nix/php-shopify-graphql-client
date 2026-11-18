<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * Represents an applied code discount.
 */
class ShopifySubscriptionAppliedCodeDiscount
{
    protected $id;
    protected $redeemCode;
    protected $rejectionReason;

    
    /**
     * The unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The redeem code of the discount that applies on the subscription.
     *
     * @return string
     */
    public function getRedeemCode(): ?string
    {
        return $this->redeemCode;
    }

    
    /**
     * The reason that the discount on the subscription draft is rejected.
     *
     * @return string A ShopifySubscriptionDiscountRejectionReasonEnumObject value
     */
    public function getRejectionReason(): ?string
    {
        return $this->rejectionReason;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['redeemCode']) && $data['redeemCode'] !== null) {
                $instance->redeemCode = $data['redeemCode'];
            }
            if (isset($data['rejectionReason']) && $data['rejectionReason'] !== null) {
                $instance->rejectionReason = $data['rejectionReason'];
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->redeemCode !== null) {
                $data['redeemCode'] = $this->redeemCode;
            }
            if ($this->rejectionReason !== null) {
                $data['rejectionReason'] = $this->rejectionReason;
            }
            return $data;
        }
}
