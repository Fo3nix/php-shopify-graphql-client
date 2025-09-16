<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\InventoryItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Location;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\InventoryQuantity;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\InventoryScheduledChangeConnection;

class InventoryLevel
{
    protected $canDeactivate;
    protected $createdAt;
    protected $deactivationAlert;
    protected $id;
    protected $item;
    protected $location;
    protected $quantities;
    protected $scheduledChanges;
    protected $updatedAt;

    
    /**
     * @return bool
     */
    public function getCanDeactivate()
    {
        return $this->canDeactivate;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return string
     */
    public function getDeactivationAlert()
    {
        return $this->deactivationAlert;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return InventoryItem
     */
    public function getItem()
    {
        return $this->item;
    }

    
    /**
     * @return Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    
    /**
     * @return InventoryQuantity[]
     */
    public function getQuantities()
    {
        return $this->quantities;
    }

    
    /**
     * @return InventoryScheduledChangeConnection
     */
    public function getScheduledChanges()
    {
        return $this->scheduledChanges;
    }

    
    /**
     * @return Carbon
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['canDeactivate']) && $data['canDeactivate'] !== null) {
                $instance->canDeactivate = $data['canDeactivate'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['deactivationAlert']) && $data['deactivationAlert'] !== null) {
                $instance->deactivationAlert = $data['deactivationAlert'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['item']) && $data['item'] !== null) {
                $instance->item = InventoryItem::fromArray($data['item']);
            }
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = Location::fromArray($data['location']);
            }
            if (isset($data['quantities']) && $data['quantities'] !== null) {
                $instance->quantities = array_map(function($item) { return InventoryQuantity::fromArray($item); }, $data['quantities']);
            }
            if (isset($data['scheduledChanges']) && $data['scheduledChanges'] !== null) {
                $instance->scheduledChanges = InventoryScheduledChangeConnection::fromArray($data['scheduledChanges']);
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
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
            if ($this->canDeactivate !== null) {
                $data['canDeactivate'] = $this->canDeactivate;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->deactivationAlert !== null) {
                $data['deactivationAlert'] = $this->deactivationAlert;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->item !== null) {
                $data['item'] = $this->item->asArray();
            }
            if ($this->location !== null) {
                $data['location'] = $this->location->asArray();
            }
            if ($this->quantities !== null) {
                $data['quantities'] = array_map(function($item) { return $item->asArray(); }, $this->quantities);
            }
            if ($this->scheduledChanges !== null) {
                $data['scheduledChanges'] = $this->scheduledChanges->asArray();
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
