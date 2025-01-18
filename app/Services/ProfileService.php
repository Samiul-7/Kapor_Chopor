<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class ProfileService
{
    /**
     * Update the user's profile information.
     *
     * @param \App\Models\User $user
     * @param array $data
     * @return bool
     */
    public function updateProfile($user, array $data): bool
    {
        $user->fill($data);

        if (array_key_exists('email', $data) && $user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        return $user->save();
    }

    /**
     * Delete the user's account.
     *
     * @param \App\Models\User $user
     * @return void
     */
    public function deleteUserAccount($user): void
    {
        Auth::logout();

        $user->delete();
    }
}
