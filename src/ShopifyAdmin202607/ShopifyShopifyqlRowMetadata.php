<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyqlNullCellTranslation;

/**
 * Per-row metadata for a ShopifyQL result, aligned by index with the table's rows.
 */
class ShopifyShopifyqlRowMetadata
{
    protected $nullCellTranslations;
    protected $rawResourceIds;
    protected $topNRemainderColumnNames;

    
    /**
     * Localized display text for null cells in this row, by column.
     *
     * @return ShopifyShopifyqlNullCellTranslation[]
     */
    public function getNullCellTranslations(): ?array
    {
        return $this->nullCellTranslations;
    }

    
    /**
     * Raw resource IDs associated with the row, aligned by column index. Each entry is the list of IDs for that column (empty when the cell has none). These are raw ShopifyQL identifiers (numeric IDs, or image URLs for some schemas), not GIDs.
     *
     * @return string[]
     */
    public function getRawResourceIds(): ?array
    {
        return $this->rawResourceIds;
    }

    
    /**
     * Names of the columns whose values were rolled into the top-N "Other" remainder bucket.
     *
     * @return string[]
     */
    public function getTopNRemainderColumnNames(): ?array
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
