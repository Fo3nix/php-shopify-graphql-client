<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Carbon\Carbon;

/**
 * A time period during which a price rule is applicable.
 */
class ShopifyPriceRuleValidityPeriod
{
    protected $end;
    protected $start;

    
    /**
     * The time after which the price rule becomes invalid.
     *
     * @return Carbon
     */
    public function getEnd(): ?Carbon
    {
        return $this->end;
    }

    
    /**
     * The time after which the price rule is valid.
     *
     * @return Carbon
     */
    public function getStart(): ?Carbon
    {
        return $this->start;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['end']) && $data['end'] !== null) {
                $instance->end = new Carbon($data['end']);
            }
            if (isset($data['start']) && $data['start'] !== null) {
                $instance->start = new Carbon($data['start']);
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
            if ($this->end !== null) {
                $data['end'] = $this->end->toIso8601String();
            }
            if ($this->start !== null) {
                $data['start'] = $this->start->toIso8601String();
            }
            return $data;
        }
}
