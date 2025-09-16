<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class MobilePlatformApplicationUnionObject extends UnionObject
{
    public function onAndroidApplication()
    {
        $object = new AndroidApplicationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onAppleApplication()
    {
        $object = new AppleApplicationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
