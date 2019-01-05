<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\CommonTrait;

class Deck extends Model
{   

    use CommonTrait;

    // Fillable fields
    protected $fillable = [
        'title', 'description'
    ];

    public function description(): string
    {
        if ($desc = $this->description) {
            return $desc;
        }
        return '';
    }

    public function title(): string
    {
        if ($title = $this->title) {
            return $title;
        }
        return '';
    }

}
