<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewConcertListingTest extends TestCase
{
    use DatabaseMigrations;
    /*
    * @test
    */
    function test_user_can_view_a_concert_listing(){
        // Arrange
        $concert = \App\Concert::create([
            'title' => 'Atif Concert',
            'subtitle' => 'Ali Zafar featuring',
            'date' => \Carbon\Carbon::parse('December 31, 2017 8:00pm')->toDateTimeString(),
            'ticket_price' => 3250,
            'venue' => 'Creek Club',
            'venue_address' => 'DHA phase 4',
            'city' => 'Karachi',
            'state' => 'Sindh',
            'zip' => '75050',
            'additional_information' => 'For information please call, 111-222-333'
        ]);

        // Act
        $this->visit('concerts/' . $concert->id);

        // Asset
        $this->see('Atif Concert');
        $this->see('Ali Zafar featuring');
        $this->see('32.50');
        $this->see('Creek Club');
        $this->see('DHA phase 4');
        $this->see('Karachi, Sindh 75050');
        $this->see('For information please call, 111-222-333');
    }
}
