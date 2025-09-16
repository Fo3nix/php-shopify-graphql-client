<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\InventoryLevel;

class InventoryScheduledChange
{
    protected $expectedAt;
    protected $fromName;
    protected $inventoryLevel;
    protected $ledgerDocumentUri;
    protected $quantity;
    protected $toName;

    
    /**
     * @return Carbon
     */
    public function getExpectedAt()
    {
        return $this->expectedAt;
    }

    
    /**
     * @return string
     */
    public function getFromName()
    {
        return $this->fromName;
    }

    
    /**
     * @return InventoryLevel
     */
    public function getInventoryLevel()
    {
        return $this->inventoryLevel;
    }

    
    /**
     * @return string
     */
    public function getLedgerDocumentUri()
    {
        return $this->ledgerDocumentUri;
    }

    
    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    
    /**
     * @return string
     */
    public function getToName()
    {
        return $this->toName;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['expectedAt']) && $data['expectedAt'] !== null) {
                $instance->expectedAt = new Carbon($data['expectedAt']);
            }
            if (isset($data['fromName']) && $data['fromName'] !== null) {
                $instance->fromName = $data['fromName'];
            }
            if (isset($data['inventoryLevel']) && $data['inventoryLevel'] !== null) {
                $instance->inventoryLevel = InventoryLevel::fromArray($data['inventoryLevel']);
            }
            if (isset($data['ledgerDocumentUri']) && $data['ledgerDocumentUri'] !== null) {
                $instance->ledgerDocumentUri = $data['ledgerDocumentUri'];
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
            }
            if (isset($data['toName']) && $data['toName'] !== null) {
                $instance->toName = $data['toName'];
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
            if ($this->expectedAt !== null) {
                $data['expectedAt'] = $this->expectedAt->toIso8601String();
            }
            if ($this->fromName !== null) {
                $data['fromName'] = $this->fromName;
            }
            if ($this->inventoryLevel !== null) {
                $data['inventoryLevel'] = $this->inventoryLevel->asArray();
            }
            if ($this->ledgerDocumentUri !== null) {
                $data['ledgerDocumentUri'] = $this->ledgerDocumentUri;
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            if ($this->toName !== null) {
                $data['toName'] = $this->toName;
            }
            return $data;
        }
}
