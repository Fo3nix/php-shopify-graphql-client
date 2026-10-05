<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyRolloutChangeConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyRollout;

class ShopifyRolloutTreatment
{
    protected $changes;
    protected $id;
    protected $rollout;
    protected $split;

    
    /**
     * @return ShopifyRolloutChangeConnection
     */
    public function getChanges()
    {
        return $this->changes;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyRollout
     */
    public function getRollout()
    {
        return $this->rollout;
    }

    
    /**
     * @return int
     */
    public function getSplit()
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
