<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller {

public function index() {
return response()->json(Participant::all(), 200);
}

public function store(Request $request) {
$validated = $request->validate([
'name' => 'required|string|max:255',
'email' => 'required|email|unique:participants,email',
'phone' => 'nullable|string',
'animal_type' => 'required|string|in:Cow,Goat,Sheep',
'payment_status' => 'required|string|in:Paid,Pending,Unpaid'
]);

$participant = Participant::create($validated);
return response()->json(['message' => 'Participant created successfully', 'data' => $participant], 201);
}

public function show(string $id) {
$participant = Participant::find($id);
if (!$participant) {
return response()->json(['message' => 'Participant not found'], 404);
}
return response()->json($participant, 200);
}

public function update(Request $request, string $id) {
$participant = Participant::find($id);
if (!$participant) {
return response()->json(['message' => 'Participant not found'], 404);
}

$validated = $request->validate([
'name' => 'sometimes|string|max:255',
'email' => 'sometimes|email|unique:participants,email,' . $id,
'phone' => 'nullable|string',
'animal_type' => 'sometimes|string|in:Cow,Goat,Sheep',
'payment_status' => 'sometimes|string|in:Paid,Pending,Unpaid'
]);

$participant->update($validated);
return response()->json(['message' => 'Participant updated successfully', 'data' => $participant], 200);
}

public function destroy(string $id) {
$participant = Participant::find($id);
if (!$participant) {
return response()->json(['message' => 'Participant not found'], 404);
}

$participant->delete();
return response()->json(['message' => 'Participant deleted successfully'], 200);
}
}
