<?php

namespace App\Policies;

use App\Models\Song;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SongPolicy
{
    use HandlesAuthorization;

    // check if user is subscribed member
    public function purchase(User $user, Song $song)
    {
        if ($user->is_subscribed) {
            return true;
        }
    }

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Song $song): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Song $song): bool
    {
    }

    public function delete(User $user, Song $song): bool
    {
    }

    public function restore(User $user, Song $song): bool
    {
    }

    public function forceDelete(User $user, Song $song): bool
    {
    }
}
