<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionDiscountHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionDraft;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionDraftUserError;

/**
 * Return type for `subscriptionDraftDiscountRemove` mutation.
 */
class ShopifySubscriptionDraftDiscountRemovePayload
{
    protected $discountRemoved;
    protected $draft;
    protected $userErrors;

    
    /**
     * The removed subscription draft discount.
     *
     * @return ShopifySubscriptionAppliedCodeDiscount|ShopifySubscriptionManualDiscount
     */
    public function getDiscountRemoved(): ShopifySubscriptionAppliedCodeDiscount|ShopifySubscriptionManualDiscount|null
    {
        return $this->discountRemoved;
    }

    
    /**
     * The subscription contract draft object.
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
            if (isset($data['discountRemoved']) && $data['discountRemoved'] !== null) {
                $instance->discountRemoved = ShopifySubscriptionDiscountHydrator::fromArray($data['discountRemoved']);
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
            if ($this->discountRemoved !== null) {
                $data['discountRemoved'] = ShopifySubscriptionDiscountHydrator::toArray($this->discountRemoved);
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
