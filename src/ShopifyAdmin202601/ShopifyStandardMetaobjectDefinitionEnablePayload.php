<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetaobjectDefinition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetaobjectUserError;

/**
 * Return type for `standardMetaobjectDefinitionEnable` mutation.
 */
class ShopifyStandardMetaobjectDefinitionEnablePayload
{
    protected $metaobjectDefinition;
    protected $userErrors;

    
    /**
     * The metaobject definition that was enabled using the standard template.
     *
     * @return ShopifyMetaobjectDefinition
     */
    public function getMetaobjectDefinition(): ?ShopifyMetaobjectDefinition
    {
        return $this->metaobjectDefinition;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyMetaobjectUserError[]
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
            if (isset($data['metaobjectDefinition']) && $data['metaobjectDefinition'] !== null) {
                $instance->metaobjectDefinition = ShopifyMetaobjectDefinition::fromArray($data['metaobjectDefinition']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyMetaobjectUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->metaobjectDefinition !== null) {
                $data['metaobjectDefinition'] = $this->metaobjectDefinition->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
