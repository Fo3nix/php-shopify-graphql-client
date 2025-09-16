<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\StoreCreditAccount;

class StoreCreditAccountEdge
{
    protected $cursor;
    protected $node;

    
    /**
     * @return string
     */
    public function getCursor()
    {
        return $this->cursor;
    }

    
    /**
     * @return StoreCreditAccount
     */
    public function getNode()
    {
        return $this->node;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['cursor']) && $data['cursor'] !== null) {
                $instance->cursor = $data['cursor'];
            }
            if (isset($data['node']) && $data['node'] !== null) {
                $instance->node = StoreCreditAccount::fromArray($data['node']);
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
            if ($this->cursor !== null) {
                $data['cursor'] = $this->cursor;
            }
            if ($this->node !== null) {
                $data['node'] = $this->node->asArray();
            }
            return $data;
        }
}
