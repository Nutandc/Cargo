<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{


    public function index(Request $request)
    {
        $request->validate([
            'id' => 'nullable|integer|min:1',
            'name'=>'nullable|string|max:32',
            'phone'=>'nullable|integer|min:61000000|max:65999999',
            'message'=>'nullable|string|max:500',
            'created_at' => 'nullable|string|max:10',
        ]);
        $f_id = $request->id ?: null;
        $f_name = $request->name ?: null;
        $f_phone = $request->phone ?: null;
        $f_message = $request->message ?: null;
        $f_createdAt = $request->created_at ?: null;

        $contacts = Contact::when($f_id, function ($query, $f_id) {
            return $query->where('id', 'like', '%' . $f_id . '%');
        })
            ->when($f_name, function ($query, $f_name) {
                return $query->where('name', 'like', '%' . $f_name . '%');
            })
            ->when($f_phone, function ($query, $f_phone) {
                return $query->where('phone', 'like', '%' . $f_phone . '%');
            })
            ->when($f_message, function ($query, $f_message) {
                return $query->where('message', 'like', '%' . $f_message . '%');
            })
            ->when($f_createdAt, function ($query, $f_createdAt) {
                return $query->where('created_at', 'like', '%' . $f_createdAt . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(20)
            ->withQueryString();

        return view('admin.contact.index', [
            'f_id' => $f_id,
            'f_name' => $f_name,
            'f_phone' => $f_phone,
            'f_message' => $f_message,
            'f_createdAt' => $f_createdAt,
            'contacts' => $contacts,
        ]);
    }

    public function delete($id)
    {
        $contact = Contact::where('id', $id)
            ->firstOrFail();
        $success = trans('app.delete-response', ['name' => $contact->name]);
        $contact->delete();

        return redirect()->back()
            ->with([
                'success' => $success,
            ]);
    }
}
