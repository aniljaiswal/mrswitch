<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Booking;
use App\Models\ServiceStatus;
use App\Jobs\SendBookingConfirmationEmail;
use Auth;
use Carbon\Carbon;

class BookingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bookingsWithService =  Auth::user()->bookings->sortByDesc('created_at')->take(5);

        $bookings = array();

        foreach($bookingsWithService as $booking)
        {
            $singleBooking = array();

            $singleBooking['booking_id'] = $booking->id;
            $singleBooking['booked_at'] = $booking->created_at->toDayDateTimeString();
            $singleBooking['service_type'] = $booking->service->service_label;
            $singleBooking['service_time'] = $booking->scheduled_at->toDayDateTimeString();
            $singleBooking['status'] = ucwords($booking->status);

            $bookings[] = $singleBooking;
        }

        return response()->json($bookings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //TODO: authenticate user before making this request - add a middleware for api auth

        //TODO: Create a Form request to validate data - keep controller clean

        //TODO: send SMS/email to the user and admin for booking confirmation

        try
        {
            if(Carbon::parse($request->scheduled_at)->lte(Carbon::now()))
                return response()->json(['status' => 'FAILED', 'message' => "You can't book service in past."], 400);

            $booking = Booking::create(array_merge($request->input(),
                ['user_id' => Auth::user()->id, 'status' => ServiceStatus::pending()->status_code])
            );

            $this->dispatch(new SendBookingConfirmationEmail($booking));

            return response()->json(['status' => 'OK', 'message' => 'Successfully booked.']);
        }
        catch (Exception $e)
        {
            return response()->json(['status' => 'FAILED', 'message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
