<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyRolloutSchedule;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyRolloutTreatment;

class ShopifyRollout
{
    protected $archivedAt;
    protected $concludedAt;
    protected $createdAt;
    protected $effectiveTrafficAllocation;
    protected $id;
    protected $name;
    protected $schedule;
    protected $startedAt;
    protected $status;
    protected $trafficAllocation;
    protected $treatments;
    protected $updatedAt;

    
    /**
     * @return Carbon
     */
    public function getArchivedAt()
    {
        return $this->archivedAt;
    }

    
    /**
     * @return Carbon
     */
    public function getConcludedAt()
    {
        return $this->concludedAt;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return float
     */
    public function getEffectiveTrafficAllocation()
    {
        return $this->effectiveTrafficAllocation;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return ShopifyRolloutSchedule
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    
    /**
     * @return Carbon
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }

    
    /**
     * @return ShopifyRolloutStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return int
     */
    public function getTrafficAllocation()
    {
        return $this->trafficAllocation;
    }

    
    /**
     * @return ShopifyRolloutTreatment[]
     */
    public function getTreatments()
    {
        return $this->treatments;
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
            if (isset($data['archivedAt']) && $data['archivedAt'] !== null) {
                $instance->archivedAt = new Carbon($data['archivedAt']);
            }
            if (isset($data['concludedAt']) && $data['concludedAt'] !== null) {
                $instance->concludedAt = new Carbon($data['concludedAt']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['effectiveTrafficAllocation']) && $data['effectiveTrafficAllocation'] !== null) {
                $instance->effectiveTrafficAllocation = $data['effectiveTrafficAllocation'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['schedule']) && $data['schedule'] !== null) {
                $instance->schedule = ShopifyRolloutSchedule::fromArray($data['schedule']);
            }
            if (isset($data['startedAt']) && $data['startedAt'] !== null) {
                $instance->startedAt = new Carbon($data['startedAt']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['trafficAllocation']) && $data['trafficAllocation'] !== null) {
                $instance->trafficAllocation = $data['trafficAllocation'];
            }
            if (isset($data['treatments']) && $data['treatments'] !== null) {
                $instance->treatments = array_map(function($item) { return ShopifyRolloutTreatment::fromArray($item); }, $data['treatments']);
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
            if ($this->archivedAt !== null) {
                $data['archivedAt'] = $this->archivedAt->toIso8601String();
            }
            if ($this->concludedAt !== null) {
                $data['concludedAt'] = $this->concludedAt->toIso8601String();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->effectiveTrafficAllocation !== null) {
                $data['effectiveTrafficAllocation'] = $this->effectiveTrafficAllocation;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->schedule !== null) {
                $data['schedule'] = $this->schedule->asArray();
            }
            if ($this->startedAt !== null) {
                $data['startedAt'] = $this->startedAt->toIso8601String();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->trafficAllocation !== null) {
                $data['trafficAllocation'] = $this->trafficAllocation;
            }
            if ($this->treatments !== null) {
                $data['treatments'] = array_map(function($item) { return $item->asArray(); }, $this->treatments);
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
