@extends('layouts.admin')

@section('content')
    <div class="mx-auto max-w-270">
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-title-md2 font-semibold text-black dark:text-white">
                Profile
            </h2>
            <nav>
                <ol class="flex items-center gap-2">
                    <li><a class="font-medium hover:text-blue-600" href="{{ route('admin.dashboard') }}">Dashboard /</a></li>
                    <li class="font-medium text-blue-600">Profile</li>
                </ol>
            </nav>
        </div>

        <div class="grid grid-cols-5 gap-8">
            <div class="col-span-5 xl:col-span-3">
                <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="border-b border-stroke py-4 px-7 dark:border-strokedark">
                        <h3 class="font-medium text-black dark:text-white">
                            Personal Information
                        </h3>
                    </div>
                    <div class="p-7">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>

            <div class="col-span-5 xl:col-span-2">
                 <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark mb-8">
                    <div class="border-b border-stroke py-4 px-7 dark:border-strokedark">
                        <h3 class="font-medium text-black dark:text-white">
                            Change Password
                        </h3>
                    </div>
                    <div class="p-7">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="border-b border-stroke py-4 px-7 dark:border-strokedark">
                        <h3 class="font-medium text-black dark:text-white">
                            Delete Account
                        </h3>
                    </div>
                    <div class="p-7">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
