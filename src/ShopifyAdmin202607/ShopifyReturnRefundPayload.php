<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyRefund;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyReturnUserError;

/**
 * Return type for `returnRefund` mutation.
 */
class ShopifyReturnRefundPayload
{
    protected $refund;
    protected $userErrors;

    
    /**
     * The created refund.
     *
     * @return ShopifyRefund
     */
    public function getRefund(): ?ShopifyRefund
    {
        return $this->refund;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyReturnUserError[]
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
            if (isset($data['refund']) && $data['refund'] !== null) {
                $instance->refund = ShopifyRefund::fromArray($data['refund']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyReturnUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->refund !== null) {
                $data['refund'] = $this->refund->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
