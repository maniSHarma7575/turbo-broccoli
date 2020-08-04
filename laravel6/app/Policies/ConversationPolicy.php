<?php

namespace App\Policies;

use App\Conversations;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConversationPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Conversations $conversations)
    {
        return $conversations->user->is($user);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Conversations  $conversations
     * @return mixed
     */
    public function update(User $user, Conversations $conversations)
    {
      
        return $conversations->user->is($user);
    }

   
}
