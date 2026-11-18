<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyGiftCardDebitTransaction;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyGiftCardTransactionUserError;

/**
 * Return type for `giftCardDebit` mutation.
 */
class ShopifyGiftCardDebitPayload
{
    protected $giftCardDebitTransaction;
    protected $userErrors;

    
    /**
     * The gift card debit transaction that was created.
     *
     * @return ShopifyGiftCardDebitTransaction
     */
    public function getGiftCardDebitTransaction(): ?ShopifyGiftCardDebitTransaction
    {
        return $this->giftCardDebitTransaction;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyGiftCardTransactionUserError[]
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
            if (isset($data['giftCardDebitTransaction']) && $data['giftCardDebitTransaction'] !== null) {
                $instance->giftCardDebitTransaction = ShopifyGiftCardDebitTransaction::fromArray($data['giftCardDebitTransaction']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyGiftCardTransactionUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->giftCardDebitTransaction !== null) {
                $data['giftCardDebitTransaction'] = $this->giftCardDebitTransaction->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
