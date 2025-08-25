<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use Illuminate\Support\Facades\Storage;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'student_id' => 'required|string|max:50',
            'institution' => 'required|string|max:255',
            'level' => 'required|string',
            'major' => 'required|string|max:255',
            'grade' => 'required|string|max:50',
            'category' => 'required|string',
            'participation_type' => 'required|string',
            'team_name' => 'nullable|string|max:255',
            'team_members' => 'nullable|string',
            'project_title' => 'required|string|max:255',
            'project_description' => 'required|string',
            'student_card' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'active_student' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'payment_proof' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'terms_accepted' => 'required|accepted',
            'newsletter_subscribed' => 'boolean'
        ]);

        // Handle file uploads
        $studentCardPath = $request->file('student_card')->store('registrations/student_cards', 'public');
        $activeStudentPath = $request->file('active_student')->store('registrations/active_students', 'public');
        $paymentProofPath = $request->hasFile('payment_proof') 
            ? $request->file('payment_proof')->store('registrations/payment_proofs', 'public') 
            : null;

        // Create registration
        Registration::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'student_id' => $validated['student_id'],
            'institution' => $validated['institution'],
            'level' => $validated['level'],
            'major' => $validated['major'],
            'grade' => $validated['grade'],
            'category' => $validated['category'],
            'participation_type' => $validated['participation_type'],
            'team_name' => $validated['team_name'],
            'team_members' => $validated['team_members'],
            'project_title' => $validated['project_title'],
            'project_description' => $validated['project_description'],
            'student_card_path' => $studentCardPath,
            'active_student_path' => $activeStudentPath,
            'payment_proof_path' => $paymentProofPath,
            'terms_accepted' => true,
            'newsletter_subscribed' => $request->boolean('newsletter_subscribed')
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Pendaftaran berhasil! Kami akan mengirim konfirmasi ke email Anda.'
        ]);
    }
}
