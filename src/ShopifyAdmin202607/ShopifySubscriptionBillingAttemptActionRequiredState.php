<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifySubscriptionBillingAttemptAction;

class ShopifySubscriptionBillingAttemptActionRequiredState
{
    protected $action;

    
    /**
     * @return ShopifySubscriptionBillingAttemptAction
     */
    public function getAction()
    {
        return $this->action;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['action']) && $data['action'] !== null) {
                $instance->action = ShopifySubscriptionBillingAttemptAction::fromArray($data['action']);
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
            if ($this->action !== null) {
                $data['action'] = $this->action->asArray();
            }
            return $data;
        }
}
