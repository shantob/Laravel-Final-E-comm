<?php

namespace App\View\Composers;

use App\Models\Card;
use App\Models\Category;
use App\Models\User;
use Illuminate\View\View;

class ForntendComposer
{


    public function __construct(User $users)
    {
        $this->users = $users;
    }
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $categories = Category::all();
        $view->with([
            'categories' => $categories
        ]);


        $cards = Card::all();
        $view->with([
            'cards' => $cards
        ]);


        // $cards = $view->user()->get();
        // $view->with([
        //     'cards' => $cards
        // ]);


        // $view->with('cards', $this->users->count());
    }
}
