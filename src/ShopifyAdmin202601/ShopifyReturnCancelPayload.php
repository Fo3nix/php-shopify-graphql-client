<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyReturn;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyReturnUserError;

/**
 * Return type for `returnCancel` mutation.
 */
class ShopifyReturnCancelPayload
{
    protected $return;
    protected $userErrors;

    
    /**
     * The canceled return.
     *
     * @return ShopifyReturn
     */
    public function getReturn(): ?ShopifyReturn
    {
        return $this->return;
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
            if (isset($data['return']) && $data['return'] !== null) {
                $instance->return = ShopifyReturn::fromArray($data['return']);
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
            if ($this->return !== null) {
                $data['return'] = $this->return->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
