<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class CardsController extends Controller
{
    
    /**
     * Get card data from arkhamdb API
     */
    public function importCards()
    {
        $client = new Client();

        $response = $client->get('https://arkhamdb.com/api/public/cards/');
        $cards = json_decode($response->getBody()->getContents());

        // return view('cards/cards', compact('cards'));
        foreach ($cards as $card) {
            $this->syncCard($card);
        }
    }

    public function index(\App\Card $card)
    {
        $cards = $card->all();
        return view('cards.cards', compact('cards'));
    }

    /**
     * Use the cardMap helper fucntion to add each field
     * into its respective database cell
     */
    protected function createCard($data)
    {
        $card = new \App\Card;
        foreach (\App\cardMap() as $type => $field) {
            foreach ($field as $item) {
                if (isset($data->$item)) {
                    $card->$item = $data->$item;
                }
            }
        }

        $card->save();
    }

    /**
     * If card isnt in the database, sync it from the Arkham API
     * using the importCards function
     */
    protected function syncCard($card)
    {
        $found = \App\Card::where('name', $card->name)->first();

        if (!$found) {
            return $this->createCard($card);
        }
    }

}
