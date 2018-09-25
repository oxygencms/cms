<?php

use App\Models\Phrase;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Cache;

class PhrasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phrases = [
            [
                'name' => 'db',
                'items' => [
                    [
                        'key' => 'password-recommendation',
                        'text' => [
                            'en' => 'Avoid passwords that are easy to guess or used with other websites',
                        ],
                    ]
                ],
            ],

            [
                'name' => 'headings',
                'items' => [
                    [
                        'key' => 'dashboard',
                        'text' => [
                            'en' => 'Dashboard',
                        ],
                    ],
                    [
                        'key' => 'personal-information',
                        'text' => [
                            'en' => 'Personal information',
                        ],
                    ],
                    [
                        'key' => 'change-password',
                        'text' => [
                            'en' => 'Change password',
                        ],
                    ],
                ],
            ],

            [
                'name' => 'links',
                'items' => [
                    [
                        'key' => 'facebook-login',
                        'text' => [
                            'en' => 'Facebook login',
                        ],
                    ],
                    [
                        'key' => 'twitter-login',
                        'text' => [
                            'en' => 'Twitter login',
                        ],
                    ],
                    [
                        'key' => 'gplus-login',
                        'text' => [
                            'en' => 'Google plus',
                        ],
                    ],
                    [
                        'key' => 'dashboard',
                        'text' => [
                            'en' => 'Dashboard',
                        ],
                    ],
                    [
                        'key' => 'my-profile',
                        'text' => [
                            'en' => 'My Profile',
                        ],
                    ],
                    [
                        'key' => 'add-photo',
                        'text' => [
                            'en' => 'Add Picture',
                        ],
                    ],
                    [
                        'key' => 'user-profile-update',
                        'text' => [
                            'en' => 'Update',
                        ],
                    ],
                    [
                        'key' => 'user-password-update',
                        'text' => [
                            'en' => 'Update',
                        ],
                    ],
                    [
                        'key' => 'back-to-top',
                        'text' => [
                            'en' => 'Back to top',
                        ],
                    ],
                    [
                        'key' => 'forgotten-password',
                        'text' => [
                            'en' => 'Forgotten password?',
                        ],
                    ],
                ],
            ],

            [
                'name' => 'buttons',
                'items'  => [
                    [
                        'key' => 'contact-us-form-send',
                        'text' => [
                            'en' => 'Send Message',
                        ],
                    ],
                    [
                        'key' => 'sign-up',
                        'text' => [
                            'en' => 'Sign up',
                        ],
                    ],
                    [
                        'key' => 'log-in',
                        'text' => [
                            'en' => 'Log in',
                        ],
                    ],
                    [
                        'key' => 'reset-password',
                        'text' => [
                            'en' => 'Reset Password',
                        ],
                    ],
                ],
            ],

            [
                'name' => 'labels',
                'items' => [
                    [
                        'key' => 'search',
                        'text' => [
                            'en' => 'Search',
                        ],
                    ],
                    [
                        'key' => 'name',
                        'text' => [
                            'en' => 'Name',
                        ],
                    ],
                    [
                        'key' => 'phone',
                        'text' => [
                            'en' => 'Phone',
                        ],
                    ],
                    [
                        'key' => 'email',
                        'text' => [
                            'en' => 'Email',
                        ],
                    ],
                    [
                        'key' => 'password',
                        'text' => [
                            'en' => 'Password',
                        ],
                    ],
                    [
                        'key' => 'password-confirmation',
                        'text' => [
                            'en' => 'Confirm password',
                        ],
                    ],
                    [
                        'key' => 'current-password',
                        'text' => [
                            'en' => 'Current password',
                        ],
                    ],
                    [
                        'key' => 'new-password',
                        'text' => [
                            'en' => 'New password',
                        ],
                    ],
                    [
                        'key' => 'confirm-new-password',
                        'text' => [
                            'en' => 'Confirm new password',
                        ],
                    ],
                    [
                        'key' => 'country',
                        'text' => [
                            'en' => 'Country',
                        ],
                    ],
                    [
                        'key' => 'city',
                        'text' => [
                            'en' => 'City',
                        ],
                    ],
                    [
                        'key' => 'postcode',
                        'text' => [
                            'en' => 'Postcode',
                        ],
                    ],
                    [
                        'key' => 'address',
                        'text' => [
                            'en' => 'Address',
                        ],
                    ],
                    [
                        'key' => 'description',
                        'text' => [
                            'en' => 'Description',
                        ],
                    ],
                    [
                        'key' => 'latitude',
                        'text' => [
                            'en' => 'Latitude',
                        ],
                    ],
                    [
                        'key' => 'longitude',
                        'text' => [
                            'en' => 'Longitude',
                        ],
                    ],
                    [
                        'key' => 'active',
                        'text' => [
                            'en' => 'Active',
                        ],
                    ],
                    [
                        'key' => 'length',
                        'text' => [
                            'en' => 'Length',
                        ],
                    ],
                    [
                        'key' => 'width',
                        'text' => [
                            'en' => 'Width',
                        ],
                    ],
                    [
                        'key' => 'message',
                        'text' => [
                            'en' => 'Message',
                        ],
                    ],
                    [
                        'key' => 'last-name',
                        'text' => [
                            'en' => 'Last name',
                        ],
                    ],
                    [
                        'key' => 'address-line1',
                        'text' => [
                            'en' => 'Address line 1',
                        ],
                    ],
                    [
                        'key' => 'address-line2',
                        'text' => [
                            'en' => 'Address line 2',
                        ],
                    ],
                    [
                        'key' => 'male',
                        'text' => [
                            'en' => 'Male',
                        ],
                    ],
                    [
                        'key' => 'female',
                        'text' => [
                            'en' => 'Female',
                        ],
                    ],
                    [
                        'key' => 'non-binary',
                        'text' => [
                            'en' => 'Non binary',
                        ],
                    ],
                    [
                        'key' => 'agree',
                        'text' => [
                            'en' => 'I Agree',
                        ],
                    ],
                    [
                        'key' => 'strength',
                        'text' => [
                            'en' => 'Strength',
                        ],
                    ],
                ],
            ],
        ];

        Cache::flush();

        foreach ($phrases as $group) {
            foreach ($group['items'] as $phrase) {
                Phrase::create([
                    'group' => $group['name'],
                    'key' => $phrase['key'],
                    'text' => $phrase['text'],
                ]);
            }
        }
    }
}
