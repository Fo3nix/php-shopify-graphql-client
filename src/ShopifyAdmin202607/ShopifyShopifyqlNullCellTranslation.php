<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyShopifyqlNullCellTranslation
{
    protected $columnName;
    protected $displayText;

    
    /**
     * @return string
     */
    public function getColumnName()
    {
        return $this->columnName;
    }

    
    /**
     * @return string
     */
    public function getDisplayText()
    {
        return $this->displayText;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['columnName']) && $data['columnName'] !== null) {
                $instance->columnName = $data['columnName'];
            }
            if (isset($data['displayText']) && $data['displayText'] !== null) {
                $instance->displayText = $data['displayText'];
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
            if ($this->columnName !== null) {
                $data['columnName'] = $this->columnName;
            }
            if ($this->displayText !== null) {
                $data['displayText'] = $this->displayText;
            }
            return $data;
        }
}
