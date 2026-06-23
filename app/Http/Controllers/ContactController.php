<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Models\BlogPost;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function home()
    {
        $recentPosts = BlogPost::latest('published_date')->take(3)->get();
        return view('index', compact('recentPosts'));
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }

    public function storeContact(Request $request)
    {
        // 1. Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service' => 'required|string',
            'message' => 'required|string|min:10',
        ]);

        // 2. Save to Database
        $contact = ContactMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'service' => $request->service,
            'message' => $request->message,
        ]);

        // 3. Send Email (Clean - using Mailable)
        try {
            $data = $request->all();
            Mail::to('info@thelifecents.com')->send(new ContactMail($data));
        } catch (\Exception $e) {
            // Log error but don't stop execution
            \Log::error('Email sending failed: ' . $e->getMessage());
        }

        return redirect()->route('contact')->with('success', 'Thank you for contacting us! We will get back to you within 24 hours.');
    }

    // ===== BLOG METHODS =====
    public function blog()
    {
        $posts = BlogPost::latest('published_date')->paginate(9);
        return view('blog', compact('posts'));
    }

    public function showBlog($slug)
    {
        $post = BlogPost::where('slug', $slug)->firstOrFail();
        
        $relatedPosts = BlogPost::where('category', $post->category)
                                ->where('id', '!=', $post->id)
                                ->latest('published_date')
                                ->take(3)
                                ->get();
        
        return view('blog-detail', compact('post', 'relatedPosts'));
    }
}