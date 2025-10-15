<h1>My Wallet</h1>

<p>Current Balance: ${{ $wallet->balance }}</p>

<form method="POST" action="{{ route('wallet.add') }}">
    @csrf
    <input type="number" name="amount" placeholder="Amount to add" required>
    <button type="submit">Add Balance</button>
</form>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif
