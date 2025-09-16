<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class ResourceAlertAction
{
    protected $primary;
    protected $show;
    protected $title;
    protected $url;

    
    /**
     * @return bool
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    
    /**
     * @return string
     */
    public function getShow()
    {
        return $this->show;
    }

    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    
    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['primary']) && $data['primary'] !== null) {
                $instance->primary = $data['primary'];
            }
            if (isset($data['show']) && $data['show'] !== null) {
                $instance->show = $data['show'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['url']) && $data['url'] !== null) {
                $instance->url = $data['url'];
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
            if ($this->primary !== null) {
                $data['primary'] = $this->primary;
            }
            if ($this->show !== null) {
                $data['show'] = $this->show;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->url !== null) {
                $data['url'] = $this->url;
            }
            return $data;
        }
}
