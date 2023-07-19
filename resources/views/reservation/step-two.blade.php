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
                                    class="after:border-1 flex items-center text-blue-600 after:mx-6 after:hidden after:h-1 after:w-full after:border-b after:border-gray-200 dark:text-blue-500 dark:after:border-gray-700 sm:after:inline-block sm:after:content-[''] md:w-full xl:after:mx-10">
                                    <span
                                        class="flex items-center after:mx-2 after:text-gray-200 after:content-['/'] dark:after:text-gray-500 sm:after:hidden">
                                        <svg class="mr-2.5 h-3.5 w-3.5 sm:h-4 sm:w-4" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                        </svg>
                                        <span class="mr-2">2</span>
                                        Step <span class="hidden sm:ml-2 sm:inline-flex">Two</span>
                                    </span>
                                </li>
                            </ol>
                            {{-- form --}}
                            <form method="POST" action="{{ route('reservation.store.step.two') }}" class="p-2 m-2">
                                @csrf
                                <div class="space-y-12">
                                    <div class="border-b border-gray-900/10 pb-12">
                                        <div class="sm:col-span-3">
                                            <label for="table_id"
                                                class="block text-sm font-medium leading-6 text-gray-900">Table</label>
                                            <div class="mt-2">
                                                <select id="table_id" name="table_id"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                                    @foreach ($tables as $table)
                                                        <option value="{{ $table->id }}"
                                                            @selected($table->id == $reservation->table_id)>
                                                            {{ $table->name }}
                                                            ({{ $table->guest_number }} Guests)
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('table_id')
                                                    <div class="text-sm text-red-600">{{ $message }}</div>
                                                @enderror
                                                <p class="mt-3 text-sm leading-6 text-gray-600">Select The Table
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-6 flex items-center justify-between gap-x-6">
                                    <a href="{{ route('reservation.step.one') }}"
                                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Previous</a>
                                    <button type="submit"
                                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Make
                                        Reservation</button>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</x-guest-layout>
