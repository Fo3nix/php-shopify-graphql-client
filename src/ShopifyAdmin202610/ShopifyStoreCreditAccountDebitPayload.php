<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyStoreCreditAccountDebitTransaction;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyStoreCreditAccountDebitUserError;

/**
 * Return type for `storeCreditAccountDebit` mutation.
 */
class ShopifyStoreCreditAccountDebitPayload
{
    protected $storeCreditAccountTransaction;
    protected $userErrors;

    
    /**
     * The store credit account transaction that was created.
     *
     * @return ShopifyStoreCreditAccountDebitTransaction
     */
    public function getStoreCreditAccountTransaction(): ?ShopifyStoreCreditAccountDebitTransaction
    {
        return $this->storeCreditAccountTransaction;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyStoreCreditAccountDebitUserError[]
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
            if (isset($data['storeCreditAccountTransaction']) && $data['storeCreditAccountTransaction'] !== null) {
                $instance->storeCreditAccountTransaction = ShopifyStoreCreditAccountDebitTransaction::fromArray($data['storeCreditAccountTransaction']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyStoreCreditAccountDebitUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->storeCreditAccountTransaction !== null) {
                $data['storeCreditAccountTransaction'] = $this->storeCreditAccountTransaction->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
