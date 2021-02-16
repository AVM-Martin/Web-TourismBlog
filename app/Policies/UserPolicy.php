<?php

namespace App\Policies;

use App\Article;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function admin(User $user) {
        return $user->role === 'admin';
    }

    public function user(User $user) {
        return $user->role === 'user';
    }

    public function delete_article(User $user, Article $article) {
        return $this->admin($user) || $user->id === $article->user->id;
    }
}
