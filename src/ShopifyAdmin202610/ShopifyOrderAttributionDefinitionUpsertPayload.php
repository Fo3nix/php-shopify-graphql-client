<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOrderAttributionDefinition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOrderAttributionDefinitionUpsertUserError;

/**
 * Return type for `orderAttributionDefinitionUpsert` mutation.
 */
class ShopifyOrderAttributionDefinitionUpsertPayload
{
    protected $orderAttributionDefinition;
    protected $userErrors;

    
    /**
     * The order attribution definition that was upserted.
     *
     * @return ShopifyOrderAttributionDefinition
     */
    public function getOrderAttributionDefinition(): ?ShopifyOrderAttributionDefinition
    {
        return $this->orderAttributionDefinition;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyOrderAttributionDefinitionUpsertUserError[]
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
            if (isset($data['orderAttributionDefinition']) && $data['orderAttributionDefinition'] !== null) {
                $instance->orderAttributionDefinition = ShopifyOrderAttributionDefinition::fromArray($data['orderAttributionDefinition']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyOrderAttributionDefinitionUpsertUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->orderAttributionDefinition !== null) {
                $data['orderAttributionDefinition'] = $this->orderAttributionDefinition->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
