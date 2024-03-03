<?php

namespace App\Http\Controllers;

use App\Models\Connection;
use App\Models\Locale;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(): Application|View|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $connections = Connection::all();
        return view('admin.contact.connections', compact('connections'));
    }

    /**
     * Update the specified connection in the database.
        *
     * @param Request $request
     * @param  Connection  $connection
     * @return RedirectResponse
     */
    public function update(Connection $connection): RedirectResponse
    {

        // Update the status of the connection
        $connection->status = 1; // Change 'changed_status' to the desired status value

        // Save the changes to the database
        $connection->save();

        return redirect()->route('connection.index')->with('success', 'Bog`lanish muvaffaqiyatli o`zgartirildi!');
    }

    /**
     * Remove the specified connection from the database.
     *
     * @param  Connection  $connection
     * @return RedirectResponse
     */
    public function destroy(Connection $connection): RedirectResponse
    {
        $connection->delete();

        return redirect()->route('connection.index')->with('success', 'Bog`lanish muvaffaqiyatli o`chirildi!');
    }
}
