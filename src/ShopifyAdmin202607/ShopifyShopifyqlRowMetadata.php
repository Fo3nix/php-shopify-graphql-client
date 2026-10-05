<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyqlNullCellTranslation;

class ShopifyShopifyqlRowMetadata
{
    protected $nullCellTranslations;
    protected $rawResourceIds;
    protected $topNRemainderColumnNames;

    
    /**
     * @return ShopifyShopifyqlNullCellTranslation[]
     */
    public function getNullCellTranslations()
    {
        return $this->nullCellTranslations;
    }

    
    /**
     * @return string[]
     */
    public function getRawResourceIds()
    {
        return $this->rawResourceIds;
    }

    
    /**
     * @return string[]
     */
    public function getTopNRemainderColumnNames()
    {
        return $this->topNRemainderColumnNames;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['nullCellTranslations']) && $data['nullCellTranslations'] !== null) {
                $instance->nullCellTranslations = array_map(function($item) { return ShopifyShopifyqlNullCellTranslation::fromArray($item); }, $data['nullCellTranslations']);
            }
            if (isset($data['rawResourceIds']) && $data['rawResourceIds'] !== null) {
                $instance->rawResourceIds = $data['rawResourceIds'];
            }
            if (isset($data['topNRemainderColumnNames']) && $data['topNRemainderColumnNames'] !== null) {
                $instance->topNRemainderColumnNames = $data['topNRemainderColumnNames'];
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
            if ($this->nullCellTranslations !== null) {
                $data['nullCellTranslations'] = array_map(function($item) { return $item->asArray(); }, $this->nullCellTranslations);
            }
            if ($this->rawResourceIds !== null) {
                $data['rawResourceIds'] = $this->rawResourceIds;
            }
            if ($this->topNRemainderColumnNames !== null) {
                $data['topNRemainderColumnNames'] = $this->topNRemainderColumnNames;
            }
            return $data;
        }
}
