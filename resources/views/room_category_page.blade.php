<x-app-layout>


    <form>
        <div class="space-y-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900 pt-7 pl-7">Add Room Category</h2>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 pl-7">
                <div class="sm:col-span-3">
                    <label for="category" class="block text-sm font-medium leading-3 text-gray-900">Room Category</label>
                    <div class="mt-2">
                        <input type="text" name="category" id="category" autocomplete="given-category"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 w-4/4">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="price" class="block text-sm font-medium leading-3 text-gray-900">Price</label>
                    <div class="mt-2">
                        <input id="price" name="price" type="number" autocomplete="price"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 w-2/4">
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-left gap-x-6">
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </div>
        </div>
    </form>


</x-app-layout>
