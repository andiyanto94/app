<?php
	namespace App;
	use Laravel\Socialite\Contracts\User as ProfiderUser;
	use Laravel\Socialite\Facades\Socialite;

	class SocialAccountService
	{
		public function createOrGetUser(ProfiderUser $providerUser)
		{
			$account = SocialAccount::whereProvider('facebook')
				->whereProviderUserId($providerUser->getId())
				->first();
			if ($account) {
				return $account->user;
			}else {
				$account = new Socialite([
					'provider_user_id' -> $providerUser->getId(),
					'provider' => 'facebook'
				]);
				$user = User::whereEmail($providerUser->getEmail())->first();
				if (!$user) {
					$user = User::create([
						'email' => $providerUser->getEmail(),
						'name' => $providerUser->getName(),
					]);
				}
				$account->user()->associate($user);
				$account->save();
				return $user;
			}
		}
	}