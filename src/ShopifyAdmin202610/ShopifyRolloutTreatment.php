<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyRolloutChangeConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyRollout;

/**
 * A treatment in a rollout. Each treatment receives a share of the rollout's traffic and makes a set of changes to resources for the buyers it serves.
 */
class ShopifyRolloutTreatment implements ShopifyNode
{
    protected $changes;
    protected $id;
    protected $rollout;
    protected $split;

    
    /**
     * The changes this treatment makes to resources while it's served. Changes retain their `id` and `__typename` if the affected resource is deleted or inaccessible. Use `query` to filter by exact public `type`, `discount_id`, `catalog_id`, `theme_id`, or `checkout_and_accounts_configuration_id` (numeric ID or quoted GID). Theme IDs match the publish target; checkout and accounts configuration IDs match either swap source or publish target. Each resource-ID filter matches only readable, available resources.
     *
     * @return ShopifyRolloutChangeConnection
     */
    public function getChanges(): ?ShopifyRolloutChangeConnection
    {
        return $this->changes;
    }

    
    /**
     * The ID of the rollout treatment.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The rollout this treatment belongs to.
     *
     * @return ShopifyRollout
     */
    public function getRollout(): ?ShopifyRollout
    {
        return $this->rollout;
    }

    
    /**
     * The percentage of the rollout's traffic, from 0 to 100, that this treatment is configured to receive. The splits of a rollout's treatments add up to 100.
     *
     * @return int
     */
    public function getSplit(): ?int
    {
        return $this->split;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['changes']) && $data['changes'] !== null) {
                $instance->changes = ShopifyRolloutChangeConnection::fromArray($data['changes']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['rollout']) && $data['rollout'] !== null) {
                $instance->rollout = ShopifyRollout::fromArray($data['rollout']);
            }
            if (isset($data['split']) && $data['split'] !== null) {
                $instance->split = $data['split'];
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
            if ($this->changes !== null) {
                $data['changes'] = $this->changes->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->rollout !== null) {
                $data['rollout'] = $this->rollout->asArray();
            }
            if ($this->split !== null) {
                $data['split'] = $this->split;
            }
            return $data;
        }
}
