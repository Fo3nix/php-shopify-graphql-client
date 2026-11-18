<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrderTransaction;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyUserError;

/**
 * Return type for `orderCapture` mutation.
 */
class ShopifyOrderCapturePayload
{
    protected $transaction;
    protected $userErrors;

    
    /**
     * The created capture transaction.
     *
     * @return ShopifyOrderTransaction
     */
    public function getTransaction(): ?ShopifyOrderTransaction
    {
        return $this->transaction;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyUserError[]
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
            if (isset($data['transaction']) && $data['transaction'] !== null) {
                $instance->transaction = ShopifyOrderTransaction::fromArray($data['transaction']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->transaction !== null) {
                $data['transaction'] = $this->transaction->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
