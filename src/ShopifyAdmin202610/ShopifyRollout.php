<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyRolloutSchedule;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyRolloutTreatment;

/**
 * A rollout on a shop. Merchants use rollouts to run sales events, permanent launches, and A/B tests by serving treatments to a configured share of buyers.
 */
class ShopifyRollout implements ShopifyNode
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
     * The date and time at which the rollout was archived.
     *
     * @return Carbon
     */
    public function getArchivedAt(): ?Carbon
    {
        return $this->archivedAt;
    }

    
    /**
     * The actual conclusion date and time of the rollout for public API requests. Use `schedule.concludeAt` for the planned conclusion date.
     *
     * @return Carbon
     */
    public function getConcludedAt(): ?Carbon
    {
        return $this->concludedAt;
    }

    
    /**
     * The date and time at which the rollout was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The calculated percentage of new buyer traffic allocated to this rollout after accounting for other active rollouts competing for the same traffic.
     *
     * @return float
     */
    public function getEffectiveTrafficAllocation(): ?float
    {
        return $this->effectiveTrafficAllocation;
    }

    
    /**
     * The ID of the rollout.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The name of the rollout.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The rollout's planned activation and conclusion dates. Returns null when neither date is set.
     *
     * @return ShopifyRolloutSchedule
     */
    public function getSchedule(): ?ShopifyRolloutSchedule
    {
        return $this->schedule;
    }

    
    /**
     * The actual start date and time of the rollout for public API requests. Use `schedule.activateAt` for the planned activation date.
     *
     * @return Carbon
     */
    public function getStartedAt(): ?Carbon
    {
        return $this->startedAt;
    }

    
    /**
     * The status of the rollout.
     *
     * @return string A ShopifyRolloutStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * The percentage of buyer traffic that the rollout is configured to receive, as an integer from 0 to 100. This is the configured allocation before other active rollouts competing for the same traffic are taken into account, so it isn't the share of buyers that a treatment reaches.
     *
     * @return int
     */
    public function getTrafficAllocation(): ?int
    {
        return $this->trafficAllocation;
    }

    
    /**
     * The treatments of the rollout. Control treatments are included even when they have no changes.
     *
     * @return ShopifyRolloutTreatment[]
     */
    public function getTreatments(): ?array
    {
        return $this->treatments;
    }

    
    /**
     * The date and time at which the rollout was last edited. This timestamp doesn't necessarily change when another rollout changes this rollout's effective traffic allocation.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
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
