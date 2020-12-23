<?php

namespace Database\Seeders;

use App\Models\Campaign;
use App\Models\Character;
use App\Models\Faction;
use App\Models\Fear;
use App\Models\GameSession;
use App\Models\Item;
use App\Models\Location;
use App\Models\NPC;
use App\Models\ResistanceVulnerability;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory()->count(5)->has(
            Campaign::factory()->count(rand(0, 5))->has(
                Character::factory()->count(rand(1, 5))->has(
                    ResistanceVulnerability::factory()->count(rand(0, 3))->state(function (array $attributes, Character $char) {
                        return ['created_by' => $char->created_by, 'campaign_id' => $char->campaign_id];
                    })
                )->has(
                    Item::factory()->count(rand(1, 5))->state(function (array $attributes, Character $char) {
                        return ['created_by' => $char->created_by, 'campaign_id' => $char->campaign_id];
                    })
                )->has(
                    Fear::factory()->count(rand(1, 5))->state(function (array $attributes, Character $char) {
                        return ['created_by' => $char->created_by, 'campaign_id' => $char->campaign_id];
                    })
                )->has(
                    Faction::factory()->count(rand(1, 5))->state(function (array $attributes, Character $char) {
                        return ['created_by' => $char->created_by, 'campaign_id' => $char->campaign_id];
                    })
                )->hasAttached(
                    NPC::factory()->count(rand(0, 2))->state(function ($attr, Character $char) {
                        return ['created_by' => $char->created_by, 'campaign_id' => $char->campaign_id];
                    }),
                    [
                        'type' => 'ally'
                    ]
                )->hasAttached(
                    NPC::factory()->count(rand(0, 2))->state(function ($attr, Character $char) {
                        return ['created_by' => $char->created_by, 'campaign_id' => $char->campaign_id];
                    }),
                    [
                        'type' => 'enemy'
                    ]
                )->state(function (array $attributes, Campaign $campaign) {
                    $location = Location::factory()->create([
                        'campaign_id' => $campaign->id,
                        'created_by' => $campaign->created_by
                    ]);
                    return ['created_by' => $campaign->created_by, 'campaign_id' => $campaign->id, 'hometown_id' => $location->id];
                })
            )->has(
                Location::factory()->count(rand(1, 5))->state(function ($attr, Campaign $campaign){
                    return ['created_by' => $campaign->created_by, 'campaign_id' => $campaign->campaign_id];
                })->has(
                    NPC::factory()->count(rand(1, 10))->state(function ($attr, Location $location){
                        return ['created_by' => $location->created_by, 'campaign_id' => $location->campaign_id];
                    })
                )
            )->has(
                Item::factory()->count(rand(1, 30))->state(function ($attr, Campaign $campaign){
                    return ['created_by' => $campaign->created_by, 'campaign_id' => $campaign->campaign_id];
                })
            )->has(
                GameSession::factory()->count(rand(0, 5))->state(function ($attr, Campaign $campaign){
                    return ['created_by' => $campaign->created_by, 'campaign_id' => $campaign->campaign_id];
                })
            )
        )->create();

    }
}
