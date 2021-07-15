<div>
    <x-loading />
    <div class="flex justify-between items-center mt-5">
        <a href="https://github.com/tonynnabs/data-max-test" class="flex items-center">
            <h1 class="text-3xl font-bold">Github Repo</h1>
            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
            </svg>
        </a>
        <div class="flex justify-end items-center">
            <h3 class="mr-3">Search</h3>
            <div>
                <input wire:model.debounce.300ms="search" type="text" class="border border-gray-300 text-sm rounded" >
            </div>
        </div>

    </div>
    <div class="flex justify-center items-center mt-10 w-full">
        <table class="table-auto border-collapse border border-gray-300 w-full">
            <thead>
                <tr>
                    <x-table-header title="Name"/>
                    <x-table-header title="ISBN"/>
                    <x-table-header title="Authors"/>
                    <x-table-header title="Pages"/>
                    <x-table-header title="Country"/>
                    <x-table-header title="Released"/>
                </tr>
            </thead>
            <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <x-table-data>{{$book['name']}}</x-table-data>
                            <x-table-data>{{$book['isbn']}}</x-table-data>
                            <x-table-data>{{$book['authors']}}</x-table-data>
                            <x-table-data>{{$book['numberOfPages']}}</x-table-data>
                            <x-table-data>{{$book['country']}}</x-table-data>
                            <x-table-data>{{$book['released']}}</x-table-data>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>

</div>
