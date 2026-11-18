<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyNodeHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyNode;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyUserError;

/**
 * Return type for `tagsRemove` mutation.
 */
class ShopifyTagsRemovePayload
{
    protected $node;
    protected $userErrors;

    
    /**
     * The object that was updated.
     *
     * @return ShopifyNode
     */
    public function getNode(): ?ShopifyNode
    {
        return $this->node;
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
            if (isset($data['node']) && $data['node'] !== null) {
                $instance->node = ShopifyNodeHydrator::fromArray($data['node']);
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
            if ($this->node !== null) {
                $data['node'] = ShopifyNodeHydrator::toArray($this->node);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
