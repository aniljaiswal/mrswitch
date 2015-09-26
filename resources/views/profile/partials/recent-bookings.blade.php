<table class="data-table table" id="my-bookings-table">
    <thead>
        <tr>
            <th>Booking # </th>
            <th>Booked At</th>
            <th>Service Type</th>
            <th>Scheduled Time</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <tr v-repeat="bookings">
            <td>@{{booking_id}}</td>
            <td><span class="nobr">@{{booked_at}}</span></td>
            <td>@{{service_type}}</td>
            <td><span class="nobr">@{{service_time}}</span></td>
            <td><em>@{{status}}</em></td>
            <td>
                <span class="nobr">
                    <a href="">View Details</a>
                    {{-- <span class="divider">|</span> <a href="" class="link-reorder">Book again</a> --}}
                </span>
            </td>
        </tr>
    </tbody>
</table>
