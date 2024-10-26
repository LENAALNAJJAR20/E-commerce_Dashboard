@extends('Components.layout')
@section('content')
    <section class="send-message mt-5 mb-5">
        <h1 class="text-center mb-4" style="color: black">Send Message to {{ $user->name }}</h1>
        <div class="container">
            <form method="POST" action="{{ route('users.sendMessage', $user->id) }}">
                @csrf
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn"  style="background-color:  #ffd480;color: black">Send Message</button>
            </form>
        </div>
    </section>
@endsection
