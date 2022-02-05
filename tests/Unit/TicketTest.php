<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Ticket;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class TicketTest extends TestCase
{
    use DatabaseTransactions;
    
    public function getTestData()
    {
        $this->assertTrue($ticket->isNew());
        return [
            [0, true],
            [1, false],
        ];
    }
      /**
     * @dataProvider getTestData
     */
    public function testIsNew($status, $expectedResult)
    {
        $ticket = Ticket::factory()->create([
            'status' => $status,
        ]);
        $this->assertEquals($expectedResult, $ticket->isNew());
    }

}
