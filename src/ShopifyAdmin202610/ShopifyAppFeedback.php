<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyChannel;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLink;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyUserError;

class ShopifyAppFeedback
{
    protected $app;
    protected $channel;
    protected $feedbackGeneratedAt;
    protected $link;
    protected $messages;
    protected $state;

    
    /**
     * @return ShopifyApp
     */
    public function getApp()
    {
        return $this->app;
    }

    
    /**
     * @return ShopifyChannel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    
    /**
     * @return Carbon
     */
    public function getFeedbackGeneratedAt()
    {
        return $this->feedbackGeneratedAt;
    }

    
    /**
     * @return ShopifyLink
     */
    public function getLink()
    {
        return $this->link;
    }

    
    /**
     * @return ShopifyUserError[]
     */
    public function getMessages()
    {
        return $this->messages;
    }

    
    /**
     * @return ShopifyResourceFeedbackStateEnumObject
     */
    public function getState()
    {
        return $this->state;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['app']) && $data['app'] !== null) {
                $instance->app = ShopifyApp::fromArray($data['app']);
            }
            if (isset($data['channel']) && $data['channel'] !== null) {
                $instance->channel = ShopifyChannel::fromArray($data['channel']);
            }
            if (isset($data['feedbackGeneratedAt']) && $data['feedbackGeneratedAt'] !== null) {
                $instance->feedbackGeneratedAt = new Carbon($data['feedbackGeneratedAt']);
            }
            if (isset($data['link']) && $data['link'] !== null) {
                $instance->link = ShopifyLink::fromArray($data['link']);
            }
            if (isset($data['messages']) && $data['messages'] !== null) {
                $instance->messages = array_map(function($item) { return ShopifyUserError::fromArray($item); }, $data['messages']);
            }
            if (isset($data['state']) && $data['state'] !== null) {
                $instance->state = $data['state'];
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
            if ($this->app !== null) {
                $data['app'] = $this->app->asArray();
            }
            if ($this->channel !== null) {
                $data['channel'] = $this->channel->asArray();
            }
            if ($this->feedbackGeneratedAt !== null) {
                $data['feedbackGeneratedAt'] = $this->feedbackGeneratedAt->toIso8601String();
            }
            if ($this->link !== null) {
                $data['link'] = $this->link->asArray();
            }
            if ($this->messages !== null) {
                $data['messages'] = array_map(function($item) { return $item->asArray(); }, $this->messages);
            }
            if ($this->state !== null) {
                $data['state'] = $this->state;
            }
            return $data;
        }
}
