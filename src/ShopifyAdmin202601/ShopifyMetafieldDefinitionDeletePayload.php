<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetafieldDefinitionIdentifier;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetafieldDefinitionDeleteUserError;

/**
 * Return type for `metafieldDefinitionDelete` mutation.
 */
class ShopifyMetafieldDefinitionDeletePayload
{
    protected $deletedDefinition;
    protected $deletedDefinitionId;
    protected $userErrors;

    
    /**
     * The metafield definition that was deleted.
     *
     * @return ShopifyMetafieldDefinitionIdentifier
     */
    public function getDeletedDefinition(): ?ShopifyMetafieldDefinitionIdentifier
    {
        return $this->deletedDefinition;
    }

    
    /**
     * The ID of the deleted metafield definition.
     *
     * @return string
     */
    public function getDeletedDefinitionId(): ?string
    {
        return $this->deletedDefinitionId;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyMetafieldDefinitionDeleteUserError[]
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
            if (isset($data['deletedDefinition']) && $data['deletedDefinition'] !== null) {
                $instance->deletedDefinition = ShopifyMetafieldDefinitionIdentifier::fromArray($data['deletedDefinition']);
            }
            if (isset($data['deletedDefinitionId']) && $data['deletedDefinitionId'] !== null) {
                $instance->deletedDefinitionId = $data['deletedDefinitionId'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyMetafieldDefinitionDeleteUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->deletedDefinition !== null) {
                $data['deletedDefinition'] = $this->deletedDefinition->asArray();
            }
            if ($this->deletedDefinitionId !== null) {
                $data['deletedDefinitionId'] = $this->deletedDefinitionId;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
