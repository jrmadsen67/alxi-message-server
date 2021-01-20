<x-list-header title="SIM Card Plans"></x-list-header>

<x-list-datatable>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Nickname
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Hourly Capacity
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Daily Capacity
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Monthly Capacity
            </th>
            <th scope="col" class="relative px-6 py-3">
            </th>
        </tr>
        </thead>

        <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($records as $record)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                    {{ $record->nickname }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                    {{ $record->hourly_capacity }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                    {{ $record->daily_capacity }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                    {{ $record->monthly_capacity }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <x-list-row-action-btns :record="$record"></x-list-row-action-btns>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-list-datatable>
