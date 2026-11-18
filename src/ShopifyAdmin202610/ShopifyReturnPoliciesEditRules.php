<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * Rules that apply to buyer-initiated edit and cancellation requests under a return policy profile.
 */
class ShopifyReturnPoliciesEditRules
{
    protected $canAcceptEdits;
    protected $editWindowMinutes;

    
    /**
     * Whether the policy accepts buyer-initiated edit requests. When false, the customer can't request edits or cancellations for items under this policy.
     *
     * @return bool
     */
    public function getCanAcceptEdits(): ?bool
    {
        return $this->canAcceptEdits;
    }

    
    /**
     * The cancellation window in minutes. Set to -1 to indicate a window until fulfillment. When `canAcceptEdits` is false, this value is ignored as edit requests aren't accepted.
     *
     * @return int
     */
    public function getEditWindowMinutes(): ?int
    {
        return $this->editWindowMinutes;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['canAcceptEdits']) && $data['canAcceptEdits'] !== null) {
                $instance->canAcceptEdits = $data['canAcceptEdits'];
            }
            if (isset($data['editWindowMinutes']) && $data['editWindowMinutes'] !== null) {
                $instance->editWindowMinutes = $data['editWindowMinutes'];
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
            if ($this->canAcceptEdits !== null) {
                $data['canAcceptEdits'] = $this->canAcceptEdits;
            }
            if ($this->editWindowMinutes !== null) {
                $data['editWindowMinutes'] = $this->editWindowMinutes;
            }
            return $data;
        }
}
