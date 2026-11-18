<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionManualDiscount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionDraft;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionLine;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionDraftUserError;

/**
 * Return type for `subscriptionDraftLineRemove` mutation.
 */
class ShopifySubscriptionDraftLineRemovePayload
{
    protected $discountsUpdated;
    protected $draft;
    protected $lineRemoved;
    protected $userErrors;

    
    /**
     * The list of updated subscription discounts impacted by the removed line.
     *
     * @return ShopifySubscriptionManualDiscount[]
     */
    public function getDiscountsUpdated(): ?array
    {
        return $this->discountsUpdated;
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
     * The removed Subscription Line.
     *
     * @return ShopifySubscriptionLine
     */
    public function getLineRemoved(): ?ShopifySubscriptionLine
    {
        return $this->lineRemoved;
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
            if (isset($data['discountsUpdated']) && $data['discountsUpdated'] !== null) {
                $instance->discountsUpdated = array_map(function($item) { return ShopifySubscriptionManualDiscount::fromArray($item); }, $data['discountsUpdated']);
            }
            if (isset($data['draft']) && $data['draft'] !== null) {
                $instance->draft = ShopifySubscriptionDraft::fromArray($data['draft']);
            }
            if (isset($data['lineRemoved']) && $data['lineRemoved'] !== null) {
                $instance->lineRemoved = ShopifySubscriptionLine::fromArray($data['lineRemoved']);
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
            if ($this->discountsUpdated !== null) {
                $data['discountsUpdated'] = array_map(function($item) { return $item->asArray(); }, $this->discountsUpdated);
            }
            if ($this->draft !== null) {
                $data['draft'] = $this->draft->asArray();
            }
            if ($this->lineRemoved !== null) {
                $data['lineRemoved'] = $this->lineRemoved->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
