<?php

class ConnectionTest extends \PHPUnit\Framework\TestCase {
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $client = new MongoDB\Client(
            'mongodb://localhost@27017/test?retryWrites=true&w=majority'
        );
        var_dump(getenv('MONGO_HOST'));die;
        $this->assertNotNull($client);
    }
}