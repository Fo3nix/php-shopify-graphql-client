<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldDefinition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldDefinitionUnpinUserError;

/**
 * Return type for `metafieldDefinitionUnpin` mutation.
 */
class ShopifyMetafieldDefinitionUnpinPayload
{
    protected $unpinnedDefinition;
    protected $userErrors;

    
    /**
     * The metafield definition that was unpinned.
     *
     * @return ShopifyMetafieldDefinition
     */
    public function getUnpinnedDefinition(): ?ShopifyMetafieldDefinition
    {
        return $this->unpinnedDefinition;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyMetafieldDefinitionUnpinUserError[]
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
            if (isset($data['unpinnedDefinition']) && $data['unpinnedDefinition'] !== null) {
                $instance->unpinnedDefinition = ShopifyMetafieldDefinition::fromArray($data['unpinnedDefinition']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyMetafieldDefinitionUnpinUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->unpinnedDefinition !== null) {
                $data['unpinnedDefinition'] = $this->unpinnedDefinition->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
