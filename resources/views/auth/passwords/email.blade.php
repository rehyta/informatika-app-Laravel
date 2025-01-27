
<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="form-group">
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
</form>
