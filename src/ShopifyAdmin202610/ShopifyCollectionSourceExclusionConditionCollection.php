<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCollection;

/**
 * A condition based on collections for excluding products from a collection.
 */
class ShopifyCollectionSourceExclusionConditionCollection implements ShopifyCollectionSourceExclusionCondition
{
    protected $id;
    protected $matchType;
    protected $values;

    
    /**
     * The unique identifier for this exclusion condition.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * Collection exclusion conditions always match any referenced collection.
     *
     * @return string A ShopifyCollectionConditionMatchTypeEnumObject value
     */
    public function getMatchType(): ?string
    {
        return $this->matchType;
    }

    
    /**
     * The collection values whose products are excluded.
     *
     * @return ShopifyCollection[]
     */
    public function getValues(): ?array
    {
        return $this->values;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['matchType']) && $data['matchType'] !== null) {
                $instance->matchType = $data['matchType'];
            }
            if (isset($data['values']) && $data['values'] !== null) {
                $instance->values = array_map(function($item) { return ShopifyCollection::fromArray($item); }, $data['values']);
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->matchType !== null) {
                $data['matchType'] = $this->matchType;
            }
            if ($this->values !== null) {
                $data['values'] = array_map(function($item) { return $item->asArray(); }, $this->values);
            }
            return $data;
        }
}
