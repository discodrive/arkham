<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\CommonTrait;

class Card extends Model
{

    use CommonTrait;

    /**
     * Return the description title
     */
    public function description(): string
    {
        if ($desc = $this->text) {
            return $desc;
        }
        return '';
    }

    /**
     * Return the card title
     */
    public function title(): string 
    {
        if ($title = $this->name) {
            return $title;
        }
        return '';
    }

}
