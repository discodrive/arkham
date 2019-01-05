<?php 

namespace App\Http\Traits;

trait CommonTrait {

    /**
     * Return the description title
     */
    public function id(): int
    {
        if ($id = $this->id) {
            return $id;
        }
        return 0;
    }

}