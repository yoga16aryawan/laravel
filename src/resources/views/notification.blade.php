@if ($message = Session::get('success'))
<div class="notification is-primary">
    <strong>{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('error'))
<div class="notification is-danger">
    <strong>{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('warning'))
<div class="notification is-warning">
    <strong>{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('info'))
<div class="notification is-info">
    <strong>{{ $message }}</strong>
</div>
@endif
@if ($errors->any())
<div class="notification is-danger">
    <strong>dd($errors)</strong>
</div>
@endif