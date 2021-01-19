<x-list-header title="Countries"></x-list-header>

<x-list-datatable>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Country
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Country Code
            </th>
            <th scope="col" class="relative px-6 py-3">
            </th>
        </tr>
        </thead>

        <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($records as $record)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                    {{ $record->name }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{ $record->cc }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="#" wire:click="edit({{ $record->id }})" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    <a href="#" wire:click="delete({{ $record->id }})" class="ml-4 text-red-600 hover:text-indigo-900">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-list-datatable>
