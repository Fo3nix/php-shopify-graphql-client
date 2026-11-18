<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionManualDiscount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionDraft;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionDraftUserError;

/**
 * Return type for `subscriptionDraftFreeShippingDiscountUpdate` mutation.
 */
class ShopifySubscriptionDraftFreeShippingDiscountUpdatePayload
{
    protected $discountUpdated;
    protected $draft;
    protected $userErrors;

    
    /**
     * The updated Subscription Discount.
     *
     * @return ShopifySubscriptionManualDiscount
     */
    public function getDiscountUpdated(): ?ShopifySubscriptionManualDiscount
    {
        return $this->discountUpdated;
    }

    
    /**
     * The Subscription Contract draft object.
     *
     * @return ShopifySubscriptionDraft
     */
    public function getDraft(): ?ShopifySubscriptionDraft
    {
        return $this->draft;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifySubscriptionDraftUserError[]
     */
    public function getUserErrors(): ?array
    {
        return $this->userErrors;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['discountUpdated']) && $data['discountUpdated'] !== null) {
                $instance->discountUpdated = ShopifySubscriptionManualDiscount::fromArray($data['discountUpdated']);
            }
            if (isset($data['draft']) && $data['draft'] !== null) {
                $instance->draft = ShopifySubscriptionDraft::fromArray($data['draft']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifySubscriptionDraftUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->discountUpdated !== null) {
                $data['discountUpdated'] = $this->discountUpdated->asArray();
            }
            if ($this->draft !== null) {
                $data['draft'] = $this->draft->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
