<x-app-layout>


    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
    <form>
        <div class="space-y-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900 pt-7 pl-7">Personal Customer Information</h2>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 pl-7">
                <div class="sm:col-span-3">
                    <label for="fullname" class="block text-sm font-medium leading-3 text-gray-900">Full name</label>
                    <div class="mt-2">
                        <input type="text" name="fullname" id="fullname" autocomplete="given-fullname"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 w-4/4">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="email" class="block text-sm font-medium leading-3 text-gray-900">Email</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 w-2/4">
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                    <div class="mt-2">
                        <textarea name="address" id="address" autocomplete="address"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 w-2/4">
              </textarea>
                    </div>
                </div>

                <div>
                    <label for="phoneno" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                        number</label>
                    <input type="tel" name="phoneno" id="phoneno"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </div>
        </div>
    </form>

</x-app-layout>
