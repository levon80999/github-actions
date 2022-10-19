<?php

use MongoDB\Driver\ReadPreference;

class ConnectionTest extends \PHPUnit\Framework\TestCase {
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $host = getenv('MONGO_HOST');
        $client = new MongoDB\Client(
            'mongodb://'.$host.'@27017/test?retryWrites=true&w=majority'
        );
        $primary = $client->getManager()->selectServer(new ReadPreference(ReadPreference::RP_PRIMARY));
        $this->assertNotNull($primary);
    }
}