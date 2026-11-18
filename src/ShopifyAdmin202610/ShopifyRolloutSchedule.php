<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Carbon\Carbon;

/**
 * The planned activation and optional conclusion dates of a rollout, not its actual lifecycle timestamps.
 */
class ShopifyRolloutSchedule
{
    protected $activateAt;
    protected $concludeAt;

    
    /**
     * The date and time at which the rollout is scheduled to activate.
     *
     * @return Carbon
     */
    public function getActivateAt(): ?Carbon
    {
        return $this->activateAt;
    }

    
    /**
     * The date and time at which the rollout is scheduled to conclude, or null when no conclusion date is set.
     *
     * @return Carbon
     */
    public function getConcludeAt(): ?Carbon
    {
        return $this->concludeAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['activateAt']) && $data['activateAt'] !== null) {
                $instance->activateAt = new Carbon($data['activateAt']);
            }
            if (isset($data['concludeAt']) && $data['concludeAt'] !== null) {
                $instance->concludeAt = new Carbon($data['concludeAt']);
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
            if ($this->activateAt !== null) {
                $data['activateAt'] = $this->activateAt->toIso8601String();
            }
            if ($this->concludeAt !== null) {
                $data['concludeAt'] = $this->concludeAt->toIso8601String();
            }
            return $data;
        }
}
