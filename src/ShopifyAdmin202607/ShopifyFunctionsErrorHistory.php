<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Carbon\Carbon;

/**
 * The error history from running a Shopify Function.
 */
class ShopifyFunctionsErrorHistory
{
    protected $errorsFirstOccurredAt;
    protected $firstOccurredAt;
    protected $hasBeenSharedSinceLastError;
    protected $hasSharedRecentErrors;

    
    /**
     * The date and time that the first error occurred.
     *
     * @return Carbon
     */
    public function getErrorsFirstOccurredAt(): ?Carbon
    {
        return $this->errorsFirstOccurredAt;
    }

    
    /**
     * The date and time that the first error occurred.
     *
     * @return Carbon
     */
    public function getFirstOccurredAt(): ?Carbon
    {
        return $this->firstOccurredAt;
    }

    
    /**
     * Whether the merchant has shared all the recent errors with the developer.
     *
     * @return bool
     */
    public function getHasBeenSharedSinceLastError(): ?bool
    {
        return $this->hasBeenSharedSinceLastError;
    }

    
    /**
     * Whether the merchant has shared all the recent errors with the developer.
     *
     * @return bool
     */
    public function getHasSharedRecentErrors(): ?bool
    {
        return $this->hasSharedRecentErrors;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['errorsFirstOccurredAt']) && $data['errorsFirstOccurredAt'] !== null) {
                $instance->errorsFirstOccurredAt = new Carbon($data['errorsFirstOccurredAt']);
            }
            if (isset($data['firstOccurredAt']) && $data['firstOccurredAt'] !== null) {
                $instance->firstOccurredAt = new Carbon($data['firstOccurredAt']);
            }
            if (isset($data['hasBeenSharedSinceLastError']) && $data['hasBeenSharedSinceLastError'] !== null) {
                $instance->hasBeenSharedSinceLastError = $data['hasBeenSharedSinceLastError'];
            }
            if (isset($data['hasSharedRecentErrors']) && $data['hasSharedRecentErrors'] !== null) {
                $instance->hasSharedRecentErrors = $data['hasSharedRecentErrors'];
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
            if ($this->errorsFirstOccurredAt !== null) {
                $data['errorsFirstOccurredAt'] = $this->errorsFirstOccurredAt->toIso8601String();
            }
            if ($this->firstOccurredAt !== null) {
                $data['firstOccurredAt'] = $this->firstOccurredAt->toIso8601String();
            }
            if ($this->hasBeenSharedSinceLastError !== null) {
                $data['hasBeenSharedSinceLastError'] = $this->hasBeenSharedSinceLastError;
            }
            if ($this->hasSharedRecentErrors !== null) {
                $data['hasSharedRecentErrors'] = $this->hasSharedRecentErrors;
            }
            return $data;
        }
}
