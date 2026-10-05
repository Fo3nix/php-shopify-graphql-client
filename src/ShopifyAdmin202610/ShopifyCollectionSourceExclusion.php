<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCollectionExclusionProductSelectionConnection;

class ShopifyCollectionSourceExclusion
{
    protected $conditions;
    protected $matchType;
    protected $selections;

    
    /**
     * @return mixed[]
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    
    /**
     * @return ShopifyCollectionConditionMatchTypeEnumObject
     */
    public function getMatchType()
    {
        return $this->matchType;
    }

    
    /**
     * @return ShopifyCollectionExclusionProductSelectionConnection
     */
    public function getSelections()
    {
        return $this->selections;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['conditions']) && $data['conditions'] !== null) {
                $instance->conditions = $data['conditions'];
            }
            if (isset($data['matchType']) && $data['matchType'] !== null) {
                $instance->matchType = $data['matchType'];
            }
            if (isset($data['selections']) && $data['selections'] !== null) {
                $instance->selections = ShopifyCollectionExclusionProductSelectionConnection::fromArray($data['selections']);
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
            if ($this->conditions !== null) {
                $data['conditions'] = $this->conditions;
            }
            if ($this->matchType !== null) {
                $data['matchType'] = $this->matchType;
            }
            if ($this->selections !== null) {
                $data['selections'] = $this->selections->asArray();
            }
            return $data;
        }
}
