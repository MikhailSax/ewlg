<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class LeadController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $type = (string) $request->input('lead_type', '');

        if (!in_array($type, ['feedback', 'lead'], true)) {
            return response()->json(['ok' => false, 'error' => 'Invalid lead type'], 422);
        }

        if ($type === 'feedback') {
            $data = $request->validate([
                'feedback_name' => ['required', 'string', 'max:255'],
                'feedback_email' => ['required', 'email', 'max:255'],
                'feedback_message' => ['required', 'string', 'max:20000'],
            ]);

            $lead = Lead::create([
                'type' => $type,
                'name' => $data['feedback_name'],
                'email' => $data['feedback_email'],
                'phone' => null,
                'message' => $data['feedback_message'],
                'payload' => $request->except(['_token', 'lead_type', 'feedback_name', 'feedback_email', 'feedback_message']),
                'is_read' => false,
            ]);
        } else {
            $data = $request->validate([
                'fullName' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string', 'max:50'],
                'email' => ['required', 'email', 'max:255'],
                'message' => ['required', 'string', 'max:20000'],
            ]);

            $lead = Lead::create([
                'type' => $type,
                'name' => $data['fullName'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'message' => $data['message'],
                'payload' => $request->except(['_token', 'lead_type', 'fullName', 'phone', 'email', 'message']),
                'is_read' => false,
            ]);
        }

        return response()->json(['ok' => true, 'id' => $lead->id]);
    }
}

