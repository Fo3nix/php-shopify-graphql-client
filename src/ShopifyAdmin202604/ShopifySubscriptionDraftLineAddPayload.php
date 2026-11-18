<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionDraft;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionLine;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionDraftUserError;

/**
 * Return type for `subscriptionDraftLineAdd` mutation.
 */
class ShopifySubscriptionDraftLineAddPayload
{
    protected $draft;
    protected $lineAdded;
    protected $userErrors;

    
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
     * The added Subscription Line.
     *
     * @return ShopifySubscriptionLine
     */
    public function getLineAdded(): ?ShopifySubscriptionLine
    {
        return $this->lineAdded;
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
            if (isset($data['draft']) && $data['draft'] !== null) {
                $instance->draft = ShopifySubscriptionDraft::fromArray($data['draft']);
            }
            if (isset($data['lineAdded']) && $data['lineAdded'] !== null) {
                $instance->lineAdded = ShopifySubscriptionLine::fromArray($data['lineAdded']);
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
            if ($this->draft !== null) {
                $data['draft'] = $this->draft->asArray();
            }
            if ($this->lineAdded !== null) {
                $data['lineAdded'] = $this->lineAdded->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
