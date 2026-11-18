<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyShopifyPaymentsToolingProviderPayout;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyShopifyPaymentsPayoutAlternateCurrencyCreateUserError;

/**
 * Return type for `shopifyPaymentsPayoutAlternateCurrencyCreate` mutation.
 */
class ShopifyShopifyPaymentsPayoutAlternateCurrencyCreatePayload
{
    protected $payout;
    protected $success;
    protected $userErrors;

    
    /**
     * The resulting alternate currency payout created.
     *
     * @return ShopifyShopifyPaymentsToolingProviderPayout
     */
    public function getPayout(): ?ShopifyShopifyPaymentsToolingProviderPayout
    {
        return $this->payout;
    }

    
    /**
     * Whether the alternate currency payout was created successfully.
     *
     * @return bool
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyShopifyPaymentsPayoutAlternateCurrencyCreateUserError[]
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
            if (isset($data['payout']) && $data['payout'] !== null) {
                $instance->payout = ShopifyShopifyPaymentsToolingProviderPayout::fromArray($data['payout']);
            }
            if (isset($data['success']) && $data['success'] !== null) {
                $instance->success = $data['success'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyShopifyPaymentsPayoutAlternateCurrencyCreateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->payout !== null) {
                $data['payout'] = $this->payout->asArray();
            }
            if ($this->success !== null) {
                $data['success'] = $this->success;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
