<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\TicketDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TicketDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TicketDetail $ticketDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TicketDetail $ticketDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, TicketDetail $ticketDetail)
    {
        $input = array_filter($req->all());
        if ($req->hasFile('processPhoto')) {
            $processPhoto = upload('proses-tiket', $req, 'processPhoto');
            $input['processPhoto'] = $processPhoto;
        }
        if ($input['status'] === 'process' && $ticketDetail->status === 'pending') {
            $input['startProcess'] = Carbon::now();
            $ticket = Ticket::findOrFail($ticketDetail->ticket_id);
            $ticket->status = $input['status'];
            $ticket->update();
        }
        if ($input['status'] === 'done') $input['endProcess'] = Carbon::now();
        $data = input('TicketDetail', $input, 'put', $ticketDetail->id);
        if ($data->status === 'process') {
            toastr()->success('Aktivitas berhasil diproses');
        } elseif ($data->status === 'done') {
            toastr()->success('Aktivitas berhasil diselesaikan');
        } else {
            toastr()->success('Aktivitas berhasil diproses');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TicketDetail $ticketDetail)
    {
        //
    }
}
