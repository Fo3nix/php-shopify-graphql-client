<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySubscriptionContract;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySubscriptionContractStatusUpdateUserError;

/**
 * Return type for `subscriptionContractPause` mutation.
 */
class ShopifySubscriptionContractPausePayload
{
    protected $contract;
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
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifySubscriptionContractStatusUpdateUserError[]
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
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifySubscriptionContractStatusUpdateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
