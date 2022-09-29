<?php

namespace App\Http\Controllers;
use App\models\Post;

use Illuminate\Http\Request;

class statusController extends Controller
{
    public function updateStatus(Request $request)
    {
        $user = post::findOrFail($request->user_id);
        $user->status = $request->status;
        $user->save();
    
        return response()->json(['message' => 'User status updated successfully.']);
    }
}
