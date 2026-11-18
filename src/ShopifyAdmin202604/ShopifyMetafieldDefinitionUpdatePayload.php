<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldDefinition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldDefinitionUpdateUserError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyJob;

/**
 * Return type for `metafieldDefinitionUpdate` mutation.
 */
class ShopifyMetafieldDefinitionUpdatePayload
{
    protected $updatedDefinition;
    protected $userErrors;
    protected $validationJob;

    
    /**
     * The metafield definition that was updated.
     *
     * @return ShopifyMetafieldDefinition
     */
    public function getUpdatedDefinition(): ?ShopifyMetafieldDefinition
    {
        return $this->updatedDefinition;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyMetafieldDefinitionUpdateUserError[]
     */
    public function getUserErrors(): ?array
    {
        return $this->userErrors;
    }

    
    /**
     * The asynchronous job updating the metafield definition's validation_status.
     *
     * @return ShopifyJob
     */
    public function getValidationJob(): ?ShopifyJob
    {
        return $this->validationJob;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['updatedDefinition']) && $data['updatedDefinition'] !== null) {
                $instance->updatedDefinition = ShopifyMetafieldDefinition::fromArray($data['updatedDefinition']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyMetafieldDefinitionUpdateUserError::fromArray($item); }, $data['userErrors']);
            }
            if (isset($data['validationJob']) && $data['validationJob'] !== null) {
                $instance->validationJob = ShopifyJob::fromArray($data['validationJob']);
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
            if ($this->updatedDefinition !== null) {
                $data['updatedDefinition'] = $this->updatedDefinition->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            if ($this->validationJob !== null) {
                $data['validationJob'] = $this->validationJob->asArray();
            }
            return $data;
        }
}
