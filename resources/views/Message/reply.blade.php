@extends('Components.layout')
@section('content')
    <section class="reply mt-5 mb-5">
        <h1 class="text-center  mb-4" style="color: black">Reply to Message</h1>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <form action="{{ route('messages.reply', $message->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="reply">Your Reply</label>
                                    <textarea class="form-control" id="reply" name="reply" rows="4" required></textarea>
                                </div>
                                <button type="submit" class="btn  mt-3"
                                        style="background-color:  #ffd480;color: black">Send Reply
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
