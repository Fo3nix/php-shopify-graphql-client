<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyGiftCardCreditTransaction;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyGiftCardTransactionUserError;

/**
 * Return type for `giftCardCredit` mutation.
 */
class ShopifyGiftCardCreditPayload
{
    protected $giftCardCreditTransaction;
    protected $userErrors;

    
    /**
     * The gift card credit transaction that was created.
     *
     * @return ShopifyGiftCardCreditTransaction
     */
    public function getGiftCardCreditTransaction(): ?ShopifyGiftCardCreditTransaction
    {
        return $this->giftCardCreditTransaction;
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
            if (isset($data['giftCardCreditTransaction']) && $data['giftCardCreditTransaction'] !== null) {
                $instance->giftCardCreditTransaction = ShopifyGiftCardCreditTransaction::fromArray($data['giftCardCreditTransaction']);
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
            if ($this->giftCardCreditTransaction !== null) {
                $data['giftCardCreditTransaction'] = $this->giftCardCreditTransaction->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
