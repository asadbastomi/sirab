<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Faker\Core\File;
use App\Models\Ticket;
use App\Models\Category;
use App\Models\TicketDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = useGetAuth();

        if ($user->role === 'skpd') {
            $data = Ticket::whereUserId($user->id)->get();
            return view('skpd.ticket.index', compact('data'));
        } else {
            $data = Ticket::whereIn('status', ['pending', 'process'])->get();
            return view('admin.ticket.index', compact('data'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::whereHas('subCategories')->get();
        return view('skpd.ticket.form', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $validated = $req->validate([
            'sub_category_id' => 'required',
            'description' => 'nullable|max:255',
            'file' => 'required|mimes:doc,docx,pdf',
        ]);
        $input = $req->all();
        // dd($input);
        $input['user_id'] = useGetAuth()->id;
        // dd($input);

        if ($req->hasFile('file')) {
            $file = upload('file', $req, 'file');
            $input['file'] = $file;
        }

        // dd($input);
        $data = input('Ticket', $input, 'post', null, false);
        $activities = Activity::whereSubCategoryId($req->sub_category_id)->orderBy('serialNumber', 'asc')->get();
        foreach ($activities as $item) {
            $ticketDetail = new TicketDetail();
            $ticketDetail->ticket_id = $data->id;
            $ticketDetail->activity_id = $item->id;

            $ticketDetail->save();
        }
        toastr()->success('Tiket pengaduan berhasil dikirim');
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        if (useGetAuth()->role === 'skpd') {

            return view('skpd.ticket.show', compact('ticket'));
        } else {
            if ($ticket->ticketDetails->count() == 0) {
                $activities = Activity::whereSubCategoryId($ticket->sub_category_id)->get();

                foreach ($activities as $item) {
                    $ticketDetail = new TicketDetail();
                    $ticketDetail->ticket_id = $ticket->id;
                    $ticketDetail->activity_id = $item->id;

                    $ticketDetail->save();
                }
            }
            $firstTicketDetail = TicketDetail::whereTicketId($ticket->id)->whereIn('status', ['pending', 'process'])->first();
            // dd($firstTicketDetail);
            return view('admin.ticket.show', compact('ticket', 'firstTicketDetail'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, Ticket $ticket)
    {
        $input = array_filter($req->all());
        if ($req->hasFile('responFile')) {
            $responFile = upload('responFile', $req, 'responFile', $ticket->responFile);
            $input['responFile'] = $responFile;
        }
        $data = input('Ticket', $input, 'put', $ticket->id);
        $ticket->touch();
        toastr()->success('Respon berhasil dikirim');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
