<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class WebhookPubSubEndpoint
{
    protected $pubSubProject;
    protected $pubSubTopic;

    
    /**
     * @return string
     */
    public function getPubSubProject()
    {
        return $this->pubSubProject;
    }

    
    /**
     * @return string
     */
    public function getPubSubTopic()
    {
        return $this->pubSubTopic;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['pubSubProject']) && $data['pubSubProject'] !== null) {
                $instance->pubSubProject = $data['pubSubProject'];
            }
            if (isset($data['pubSubTopic']) && $data['pubSubTopic'] !== null) {
                $instance->pubSubTopic = $data['pubSubTopic'];
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
            if ($this->pubSubProject !== null) {
                $data['pubSubProject'] = $this->pubSubProject;
            }
            if ($this->pubSubTopic !== null) {
                $data['pubSubTopic'] = $this->pubSubTopic;
            }
            return $data;
        }
}
