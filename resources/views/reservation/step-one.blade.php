<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="flex min-h-screen items-center bg-gray-50">
            <div class="mx-auto h-full max-w-4xl flex-1 rounded-lg bg-white shadow-xl">
                <div class="flex flex-col md:flex-row">
                    <div class="h-32 md:h-auto md:w-1/2">
                        <img src="https://uploads-ssl.webflow.com/603c87adb15be3cb0b3ed9b5/608bb312005f771b8a833e33_66_cafe_menu_loovk.png"
                            class="h-full w-full object-cover" alt="Photo" />
                    </div>
                    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                        <div class="w-full">
                            <h3 class="mb-4 text-xl font-bold text-blue-600">Make Reservation</h3>
                            {{-- stepper --}}
                            <ol
                                class="flex w-full items-center text-center text-sm font-medium text-gray-500 dark:text-gray-400 sm:text-base">
                                <li
                                    class="after:border-1 flex items-center text-blue-600 after:mx-6 after:hidden after:h-1 after:w-full after:border-b after:border-gray-200 dark:text-blue-500 dark:after:border-gray-700 sm:after:inline-block sm:after:content-[''] md:w-full xl:after:mx-10">
                                    <span
                                        class="flex items-center after:mx-2 after:text-gray-200 after:content-['/'] dark:after:text-gray-500 sm:after:hidden">
                                        <svg class="mr-2.5 h-3.5 w-3.5 sm:h-4 sm:w-4" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        Step <span class="hidden sm:ml-2 sm:inline-flex">One</span>
                                    </span>
                                </li>
                                <li
                                    class="after:border-1 flex items-center after:mx-6 after:hidden after:h-1 after:w-full after:border-b after:border-gray-200 after:content-[''] dark:after:border-gray-700 sm:after:inline-block md:w-full xl:after:mx-10">
                                    <span
                                        class="flex items-center after:mx-2 after:text-gray-200 after:content-['/'] dark:after:text-gray-500 sm:after:hidden">
                                        <span class="mr-2">2</span>
                                        Step <span class="hidden sm:ml-2 sm:inline-flex">Two</span>
                                    </span>
                                </li>
                            </ol>
                            {{-- form --}}
                            <form method="POST" action="{{ route('reservation.store.step.one') }}" class="p-2 m-2">
                                @csrf
                                <div class="space-y-12">
                                    <div class="border-b border-gray-900/10 pb-12">
                                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-6">
                                            <div class="sm:col-span-4">
                                                <label for="first_name"
                                                    class="block text-sm font-medium leading-6 text-gray-900">First
                                                    Name</label>
                                                <div class="mt-2">
                                                    <div
                                                        class="pl-3 flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                        <input type="text" name="first_name" id="first_name"
                                                            value="{{ $reservation->first_name ?? '' }}"
                                                            class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                            placeholder="First Name">
                                                    </div>
                                                    @error('first_name')
                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="sm:col-span-4">
                                                <label for="last_name"
                                                    class="block text-sm font-medium leading-6 text-gray-900">Last
                                                    Name</label>
                                                <div class="mt-2">
                                                    <div
                                                        class="pl-3 flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                        <input type="text" name="last_name" id="last_name"
                                                            value="{{ $reservation->last_name ?? '' }}"
                                                            class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                            placeholder="Last Name">
                                                    </div>
                                                    @error('last_name')
                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="sm:col-span-4">
                                                <label for="email"
                                                    class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                                                <div class="mt-2">
                                                    <div
                                                        class="pl-3 flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                        <input type="email" name="email" id="email"
                                                            value="{{ $reservation->email ?? '' }}"
                                                            class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                            placeholder="test@gmail.com">
                                                    </div>
                                                    @error('email')
                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="sm:col-span-4">
                                                <label for="phone"
                                                    class="block text-sm font-medium leading-6 text-gray-900">Phone
                                                    Number</label>
                                                <div class="mt-2">
                                                    <div
                                                        class="pl-3 flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                        <input type="text" name="phone" id="phone"
                                                            value="{{ $reservation->phone ?? '' }}"
                                                            class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                            placeholder="*************">
                                                    </div>
                                                    @error('phone')
                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="sm:col-span-4">
                                                <label for="res_date"
                                                    class="block text-sm font-medium leading-6 text-gray-900">Reservation
                                                    Date</label>
                                                <div class="mt-2">
                                                    <div
                                                        class="pl-3 flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                        <input type="datetime-local" name="res_date" id="res_date"
                                                            min="{{ $min_date->format('Y-m-d\TH:i:s') }}"
                                                            max="{{ $max_date->format('Y-m-d\TH:i:s') }}"
                                                            value="{{ $reservation ? $reservation->res_date : '' }}"
                                                            class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                            placeholder="Reservation Date">
                                                    </div>
                                                    <span class="text-xs">Please Choose The Time Between
                                                        17:00-23:00</span>
                                                    @error('res_date')
                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="sm:col-span-4">
                                                <label for="name"
                                                    class="block text-sm font-medium leading-6 text-gray-900">Guest
                                                    Number</label>
                                                <div class="mt-2">
                                                    <div
                                                        class="pl-3 flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                        <input type="number" name="guest_number" id="guest_number"
                                                            value="{{ $reservation->guest_number ?? '' }}"
                                                            class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                            placeholder="Guest Number">
                                                    </div>
                                                    @error('guest_number')
                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-6 flex items-center justify-end gap-x-6">
                                    {{-- <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button> --}}
                                    <button type="submit"
                                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Next</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>
