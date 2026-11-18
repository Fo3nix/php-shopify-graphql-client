<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionContract;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionLine;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySubscriptionDraftUserError;

/**
 * Return type for `subscriptionContractProductChange` mutation.
 */
class ShopifySubscriptionContractProductChangePayload
{
    protected $contract;
    protected $lineUpdated;
    protected $userErrors;

    
    /**
     * The new Subscription Contract object.
     *
     * @return ShopifySubscriptionContract
     */
    public function getContract(): ?ShopifySubscriptionContract
    {
        return $this->contract;
    }

    
    /**
     * The updated Subscription Line.
     *
     * @return ShopifySubscriptionLine
     */
    public function getLineUpdated(): ?ShopifySubscriptionLine
    {
        return $this->lineUpdated;
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
            if (isset($data['contract']) && $data['contract'] !== null) {
                $instance->contract = ShopifySubscriptionContract::fromArray($data['contract']);
            }
            if (isset($data['lineUpdated']) && $data['lineUpdated'] !== null) {
                $instance->lineUpdated = ShopifySubscriptionLine::fromArray($data['lineUpdated']);
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
            if ($this->contract !== null) {
                $data['contract'] = $this->contract->asArray();
            }
            if ($this->lineUpdated !== null) {
                $data['lineUpdated'] = $this->lineUpdated->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
