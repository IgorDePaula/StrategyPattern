<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 16/05/17
 * Time: 16:33
 */

namespace App\Collection;
use Illuminate\Support\Collection as LaravelCollection;
use App\Contracts\SortableNameInterface;
class Collection extends LaravelCollection
{
    protected function _all_letters_to_ASCII(SortableNameInterface $string)
    {
        return strtr(utf8_decode($string->getSortableNameProperty()->getNome()),
            utf8_decode('ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ'),
            'SOZsozYYuAAAAAAACEEEEIIIIDNOOOOOOUUUUYsaaaaaaaceeeeiiiionoooooouuuuyy');
    }

    public function sortName(){
        $result = $this->sortBy([$this, '_all_letters_to_ASCII'], SORT_FLAG_CASE | SORT_STRING | SORT_NATURAL);
        return new static($result);
    }
}